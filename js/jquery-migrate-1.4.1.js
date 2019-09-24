/ *!
 * jQuery Migrate - v1.4.1 - 2016-05-19
 * Copyright jQuery Foundation y otros colaboradores
 * /
(función (jQuery, ventana, indefinido) {
// Ver http://bugs.jquery.com/ticket/13335
// "uso estricto";


jQuery.migrateVersion = "1.4.1";


var advertnedAbout = {};

// Lista de advertencias ya dadas; solo lectura pública
jQuery.migrateWarnings = [];

// Establecer en verdadero para evitar la salida de la consola; migrateAdvierten aún
// jQuery.migrateMute = falso;

// Mostrar un mensaje en la consola para que los desarrolladores sepan que estamos activos
if (window.console && window.console.log) {
	window.console.log ("JQMIGRATE: Migrar está instalado" +
		(jQuery.migrateMute? "": "con el registro activo") +
		", versión" + jQuery.migrateVersion);
}

// Establecer como falso para deshabilitar los rastros que aparecen con advertencias
if (jQuery.migrateTrace === undefined) {
	jQuery.migrateTrace = true;
}

// Olvide las advertencias que ya hemos dado; público
jQuery.migrateReset = function () {
	advertnedAbout = {};
	jQuery.migrateWarnings.length = 0;
};

function migrateWarn (msg) {
	var console = window.console;
	if (! advertnedAbout [msg]) {
		advertidoAcerca de [msg] = verdadero;
		jQuery.migrateWarnings.push (msg);
		if (console && console.warn &&! jQuery.migrateMute) {
			console.warn ("JQMIGRATE:" + msg);
			if (jQuery.migrateTrace && console.trace) {
				console.trace ();
			}
		}
	}
}

función migrateWarnProp (obj, prop, value, msg) {
	if (Object.defineProperty) {
		// En los navegadores ES5 (no antiguos), advierta si el código intenta obtener prop;
		// permite sobrescribir la propiedad en caso de que algún otro plugin lo quiera
		tratar {
			Object.defineProperty (obj, prop, {
				Configurable: cierto,
				enumerable: cierto,
				get: function () {
					migrateWarn (msg);
					valor de retorno;
				},
				set: function (newValue) {
					migrateWarn (msg);
					value = newValue;
				}
			});
			regreso;
		} catch (err) {
			// IE8 es una droga sobre Object.defineProperty, no se puede advertir allí
		}
	}

	// navegador no ES5 (o roto); solo establece la propiedad
	jQuery._definePropertyBroken = true;
	obj [prop] = valor;
}

if (document.compatMode === "BackCompat") {
	// jQuery nunca ha admitido o probado el modo Quirks
	migrateWarn ("jQuery no es compatible con el modo Quirks");
}


var attrFn = jQuery ("<input />", {size: 1}) .attr ("size") && jQuery.attrFn,
	oldAttr = jQuery.attr,
	valueAttrGet = jQuery.attrHooks.value && jQuery.attrHooks.value.get ||
		function () {return null; },
	valueAttrSet = jQuery.attrHooks.value && jQuery.attrHooks.value.set ||
		function () {return undefined; },
	rnoType = / ^ (?: input | button) $ / i,
	rnoAttrNodeType = / ^ [238] $ /,
	rboolean = / ^ (?: autofocus | autoplay | async | checked | controls | defer | disabled | hidden | loop | multiple | open | readonly | required | scoped | selected) $ / i,
	ruseDefault = / ^ (?: checked | selected) $ / i;

// jQuery.attrFn
migrateWarnProp (jQuery, "attrFn", attrFn || {}, "jQuery.attrFn está en desuso");

jQuery.attr = function (elem, name, value, pass) {
	var lowerName = name.toLowerCase (),
		nType = elem && elem.nodeType;

	if (pase) {
		// Dado que el pase se usa internamente, solo advertimos sobre el nuevo jQuery
		// versiones donde no hay un pase arg en los params formales
		if (oldAttr.length <4) {
			migrateWarn ("jQuery.fn.attr (props, pass) está en desuso");
		}
		if (elem &&! rnoAttrNodeType.test (nType) &&
			(attrFn? name en attrFn: jQuery.isFunction (jQuery.fn [name]))) {
			return jQuery (elem) [nombre] (valor);
		}
	}

	// Advertir si el usuario intenta establecer `type`, ya que se rompe en IE 6/7/8; comprobando
	// para elementos desconectados, no advertimos sobre $ ("<button>", {type: "button"}).
	if (name === "type" && value! == undefined && rnoType.test (elem.nodeName) && elem.parentNode) {
		migrateWarn ("No se puede cambiar el 'tipo' de una entrada o botón en IE 6/7/8");
	}

	// Restaurar boolHook para la propiedad booleana / sincronización de atributos
	if (! jQuery.attrHooks [lowerName] && rboolean.test (lowerName)) {
		jQuery.attrHooks [lowerName] = {
			get: function (elem, name) {
				// Alinea los atributos booleanos con las propiedades correspondientes
				// Volver a la presencia de atributos donde algunos booleanos no son compatibles
				var attrNode,
					property = jQuery.prop (elem, nombre);
				devolver propiedad === verdadero || tipo de propiedad! == "booleano" &&
					(attrNode = elem.getAttributeNode (name)) && attrNode.nodeValue! == false?

					name.toLowerCase ():
					indefinido;
			},
			set: function (elem, value, name) {
				var propName;
				if (value === false) {
					// Eliminar atributos booleanos cuando se establece en falso
					jQuery.removeAttr (elem, nombre);
				} else {
					// value es verdadero porque sabemos que en este punto es tipo booleano y no falso
					// Establecer atributos booleanos con el mismo nombre y establecer la propiedad DOM
					propName = jQuery.propFix [nombre] || nombre;
					if (propName en elem) {
						// Solo configura el IDL específicamente si ya existe en el elemento
						elem [propName] = verdadero;
					}

					elem.setAttribute (name, name.toLowerCase ());
				}
				nombre de regreso;
			}
		};

		// Advertir solo para los atributos que pueden permanecer distintos de sus propiedades post-1.9
		if (ruseDefault.test (lowerName)) {
			migrateWarn ("jQuery.fn.attr ('" + lowerName + "') podría usar propiedad en lugar de atributo");
		}
	}

	devuelve oldAttr.call (jQuery, elem, name, value);
};

// attrHooks: valor
jQuery.attrHooks.value = {
	get: function (elem, name) {
		var nodeName = (elem.nodeName || "") .toLowerCase ();
		if (nodeName === "button") {
			return valueAttrGet.apply (esto, argumentos);
		}
		if (nodeName! == "input" && nodeName! == "option") {
			migrateWarn ("jQuery.fn.attr ('value') ya no obtiene propiedades");
		}
		devolver el nombre en elem?
			elem.value:
			nulo;
	},
	set: function (elem, value) {
		var nodeName = (elem.nodeName || "") .toLowerCase ();
		if (nodeName === "button") {
			return valueAttrSet.apply (esto, argumentos);
		}
		if (nodeName! == "input" && nodeName! == "option") {
			migrateWarn ("jQuery.fn.attr ('value', val) ya no establece propiedades");
		}
		// No regresa para que también se use setAttribute
		elem.value = valor;
	}
};


var emparejado, navegador,
	oldInit = jQuery.fn.init,
	oldFind = jQuery.find,
	oldParseJSON = jQuery.parseJSON,
	rspaceAngle = / ^ \ s * </,
	rattrHashTest = / \ [(\ s * [- \ w] + \ s *) ([~ | ^ $ *]? =) \ s * ([- \ w #] *? # [- \ w #] * ) \ s * \] /,
	rattrHashGlob = / \ [(\ s * [- \ w] + \ s *) ([~ | ^ $ *]? =) \ s * ([- \ w #] *? # [- \ w #] * ) \ s * \] / g,
	// Nota: la comprobación de XSS se realiza a continuación después de recortar la cadena
	rquickExpr = / ^ ([^ <] *) (<[\ w \ W] +>) ([^>] *) $ /;

// $ (html) "parece que el cambio de la regla html"
jQuery.fn.init = function (selector, context, rootjQuery) {
	var match, ret;

	if (selector && typeof selector === "cadena") {
		if (! jQuery.isPlainObject (context) &&
				(match = rquickExpr.exec (jQuery.trim (selector))) && match [0]) {

			// Esta es una cadena HTML según las reglas "antiguas"; ¿Todavía está?
			if (! rspaceAngle.test (selector)) {
				Las cadenas de HTML migrateWarn ("$ (html) deben comenzar con '<' character");
			}
			if (match [3]) {
				Se ignora el texto HTML migrateWarn ("$ (html) después de la última etiqueta");
			}

			// Rechazar constantemente cualquier cadena tipo HTML que comience con un hash (gh-9521)
			// Tenga en cuenta que esto puede romper el código jQuery 1.6.x que de lo contrario funcionaría.
			if (match [0] .charAt (0) === "#") {
				migrateWarn ("La cadena HTML no puede comenzar con un carácter '#'");
				jQuery.error ("JQMIGRATE: cadena de selector inválida (XSS)");
			}

			// Ahora procesamos usando reglas sueltas; deja jugar pre-1.8 también
			// ¿Esto es un contexto jQuery? parseHTML espera un elemento DOM (# 178)
			if (context && context.context && context.context.nodeType) {
				context = context.context;
			}

			if (jQuery.parseHTML) {
				return oldInit.call (esto,
						jQuery.parseHTML (coincidencia [2], contexto && context.ownerDocument ||
							contexto || document, true), context, rootjQuery);
			}
		}
	}

	ret = oldInit.apply (esto, argumentos);

	// Rellena el selector y las propiedades de contexto para que funcione .live ()
	if (selector && selector.selector! == undefined) {
		// Un objeto jQuery, copia sus propiedades
		ret.selector = selector.selector;
		ret.context = selector.context;

	} else {
		ret.selector = typeof selector === "cadena"? selector: "";
		if (selector) {
			ret.context = selector.nodeType? selector: contexto || documento;
		}
	}

	return ret;
};
jQuery.fn.init.prototype = jQuery.fn;

jQuery.find = function (selector) {
	var args = Array.prototype.slice.call (argumentos);

	// Soporte: PhantomJS 1.x
	// String # match no coincide cuando se usa con // g RegExp, solo en algunas cadenas
	if (typeof selector === "cadena" && rattrHashTest.test (selector)) {

		// El hash no cotizado y no documentado fue eliminado en jQuery 1.12.0
		// Primero ve si qS piensa que es un selector válido, si es así evita un falso positivo
		tratar {
			document.querySelector (selector);
		} catch (err1) {

			// No * se ve * válido para qSA, advierta e intente citar lo que creemos que es el valor
			selector = selector.replace (rattrHashGlob, function (_, attr, op, value) {
				return "[" + attr + op + "\" "+ valor +" \ "]";
			});

			// Si la expresión regular * puede * haber creado un selector no válido, no lo actualice
			// Tenga en cuenta que puede haber falsas alarmas si el selector usa extensiones jQuery
			tratar {
				document.querySelector (selector);
				migrateWarn ("Selector de atributos con '#' debe ser citado:" + args [0]);
				args [0] = selector;
			} catch (err2) {
				migrateWarn ("El selector de atributos con '#' no fue corregido:" + args [0]);
			}
		}
	}

	return oldFind.apply (esto, args);
};

// Copiar propiedades asociadas al método jQuery.find original (por ejemplo, .attr, .isXML)
var findProp;
para (findProp en oldFind) {
	if (Object.prototype.hasOwnProperty.call (oldFind, findProp)) {
		jQuery.find [findProp] = oldFind [findProp];
	}
}

// Deja que $ .parseJSON (falsy_value) devuelva nulo
jQuery.parseJSON = function (json) {
	if (! json) {
		migrateWarn ("jQuery.parseJSON requiere una cadena JSON válida");
		devolver nulo;
	}
	return oldParseJSON.apply (esto, argumentos);
};

jQuery.uaMatch = function (ua) {
	ua = ua.toLowerCase ();

	var match = / (chrome) [\ /] ([\ w.] +) /. exec (ua) ||
		/ (webkit) [\ /] ([\ w.] +) /. exec (ua) ||
		/ (opera) (?:. * version |) [\ /] ([\ w.] +) /. exec (ua) ||
		/ (msie) ([\ w.] +) /. exec (ua) ||
		ua.indexOf ("compatible") <0 && /(mozilla)(?:.*? rv: ([\ w.] +) |) /. exec (ua) ||
		[];

	regreso {
		navegador: coincide con [1] || "",
		versión: partido [2] || "0"
	};
};

// No destruyas ningún jQuery.browser existente en caso de que sea diferente
if (! jQuery.browser) {
	emparejado = jQuery.uaMatch (navigator.userAgent);
	browser = {};

	if (matching.browser) {
		navegador [matching.browser] = true;
		browser.version = matching.version;
	}

	// Chrome es Webkit, pero Webkit también es Safari.
	if (browser.chrome) {
		browser.webkit = true;
	} else if (browser.webkit) {
		browser.safari = verdadero;
	}

	jQuery.browser = navegador;
}

// Advertir si el código intenta obtener jQuery.browser
migrateWarnProp (jQuery, "browser", jQuery.browser, "jQuery.browser está en desuso");

// jQuery.boxModel desaprobado en 1.3, jQuery.support.boxModel desaprobado en 1.7
jQuery.boxModel = jQuery.support.boxModel = (document.compatMode === "CSS1Compat");
migrateWarnProp (jQuery, "boxModel", jQuery.boxModel, "jQuery.boxModel está en desuso");
migrateWarnProp (jQuery.support, "boxModel", jQuery.support.boxModel, "jQuery.support.boxModel está en desuso");

jQuery.sub = function () {
	función jQuerySub (selector, contexto) {
		return new jQuerySub.fn.init (selector, contexto);
	}
	jQuery.extend (true, jQuerySub, this);
	jQuerySub.superclass = this;
	jQuerySub.fn = jQuerySub.prototype = this ();
	jQuerySub.fn.constructor = jQuerySub;
	jQuerySub.sub = this.sub;
	jQuerySub.fn.init = function init (selector, contexto) {
		var instance = jQuery.fn.init.call (this, selector, context, rootjQuerySub);
		return instance instanceof jQuerySub?
			ejemplo:
			jQuerySub (instancia);
	};
	jQuerySub.fn.init.prototype = jQuerySub.fn;
	var rootjQuerySub = jQuerySub (documento);
	migrateWarn ("jQuery.sub () está en desuso");
	devolver jQuerySub;
};

// La cantidad de elementos contenidos en el conjunto de elementos coincidentes
jQuery.fn.size = function () {
	migrateWarn ("jQuery.fn.size () está en desuso, use la propiedad .length");
	devuelve this.length;
};


var internalSwapCall = false;

// Si esta versión de jQuery tiene .swap (), no falsa-alarma en usos internos
if (jQuery.swap) {
	jQuery.each (["height", "width", "reliableMarginRight"], function (_, name) {
		var oldHook = jQuery.cssHooks [nombre] && jQuery.cssHooks [nombre] .get;

		if (oldHook) {
			jQuery.cssHooks [name] .get = function () {
				var ret;

				internalSwapCall = verdadero;
				ret = oldHook.apply (esto, argumentos);
				internalSwapCall = falso;
				return ret;
			};
		}
	});
}

jQuery.swap = function (elem, options, callback, args) {
	var ret, nombre,
		viejo = {};

	if (! internalSwapCall) {
		migrateWarn ("jQuery.swap () no está documentado y en desuso");
	}

	// Recordar los valores anteriores e insertar los nuevos
	para (nombre en opciones) {
		old [name] = elem.style [nombre];
		elem.style [nombre] = opciones [nombre];
	}

	ret = callback.apply (elem, args || []);

	// Revertir los valores anteriores
	para (nombre en opciones) {
		elem.style [nombre] = viejo [nombre];
	}

	return ret;
};


// Asegurarse de que $ .ajax obtenga el nuevo parseJSON definido en core.js
jQuery.ajaxSetup ({
	convertidores: {
		"texto json": jQuery.parseJSON
	}
});


var oldFnData = jQuery.fn.data;

jQuery.fn.data = function (name) {
	var ret, evt,
		elem = this [0];

	// Maneja 1.7 que tiene este comportamiento y 1.8 que no lo hace
	if (elem && name === "eventos" && arguments.length === 1) {
		ret = jQuery.data (elem, nombre);
		evt = jQuery._data (elem, nombre);
		if ((ret === undefined || ret === evt) && evt! == undefined) {
			migrateWarn ("El uso de jQuery.fn.data ('events') está en desuso");
			devolver evt;
		}
	}
	devuelve oldFnData.apply (esto, argumentos);
};


var rscriptType = / \ / (java | ecma) script / i;

// Dado que jQuery.clean se usa internamente en versiones anteriores, solo calzamos si falta
if (! jQuery.clean) {
	jQuery.clean = function (elems, context, fragment, scripts) {
		// Establecer contexto por lógica 1.8
		contexto = contexto || documento;
		context =! context.nodeType && context [0] || contexto;
		context = context.ownerDocument || contexto;

		migrateWarn ("jQuery.clean () está en desuso");

		var i, elem, handleScript, jsTags,
			ret = [];

		jQuery.merge (ret, jQuery.buildFragment (elems, context) .childNodes);

		// lógica compleja levantada directamente de jQuery 1.8
		if (fragmento) {
			// Manejo especial de cada elemento de script
			handleScript = function (elem) {
				// Compruebe si lo consideramos ejecutable
				if (! elem.type || rscriptType.test (elem.type)) {
					// Separar el script y almacenarlo en el conjunto de scripts (si se proporciona) o el fragmento
					// Devuelve la verdad para indicar que se ha manejado
					¿Scripts de devolución?
						scripts.push (elem.parentNode? elem.parentNode.removeChild (elem): elem):
						fragment.appendChild (elem);
				}
			};

			para (i = 0; (elem = ret [i])! = null; i ++) {
				// Compruebe si hemos terminado después de manejar un script ejecutable
				if (! (jQuery.nodeName (elem, "script") && handleScript (elem))) {
					// Agregar a fragmento y manejar scripts incrustados
					fragment.appendChild (elem);
					if (typeof elem.getElementsByTagName! == "undefined") {
						// handleScript altera el DOM, por lo tanto, use jQuery.merge para asegurar la iteración de la instantánea
						jsTags = jQuery.grep (jQuery.merge ([], elem.getElementsByTagName ("script")), handleScript);

						// Empalme los guiones en ret después de su antecesor anterior y avance nuestro índice más allá de ellos
						ret.splice.apply (ret, [i + 1, 0] .concat (jsTags));
						i + = jsTags.length;
					}
				}
			}
		}

		return ret;
	};
}

var eventAdd = jQuery.event.add,
	eventRemove = jQuery.event.remove,
	eventTrigger = jQuery.event.trigger,
	oldToggle = jQuery.fn.toggle,
	oldLive = jQuery.fn.live,
	oldDie = jQuery.fn.die,
	oldLoad = jQuery.fn.load,
	ajaxEvents = "ajaxStart | ajaxStop | ajaxSend | ajaxComplete | ajaxError | ajaxSuccess",
	rajaxEvent = new RegExp ("\\ b (?:" + ajaxEvents + ") \\ b"),
	rhoverHack = /(?:^|\s)hover(\.\S+|)\b/,
	hoverHack = function (eventos) {
		if (typeof (eventos)! == "cadena" || jQuery.event.special.hover) {
			eventos de retorno;
		}
		if (rhoverHack.test (eventos)) {
			migrateWarn (el pseudo-evento "hover" está en desuso, use 'mouseenter mouseleave' ");
		}
		return events && events.replace (rhoverHack, "mouseenter $ 1 mouseleave $ 1");
	};

// Propósitos del evento eliminados en 1.9, ponlos de nuevo si es necesario; no hay forma práctica de advertirles
if (jQuery.event.props && jQuery.event.props [0]! == "attrChange") {
	jQuery.event.props.unshift ("attrChange", "attrName", "relatedNode", "srcElement");
}

// El jQuery.event.handle no documentado fue "desaprobado" en jQuery 1.7
if (jQuery.event.dispatch) {
	migrateWarnProp (jQuery.event, "handle", jQuery.event.dispatch, "jQuery.event.handle no está documentado y en desuso");
}

// Soporte para pseudo-evento 'hover' y advertencias de eventos ajax
jQuery.event.add = function (elem, types, handler, data, selector) {
	if (elem! == document && rajaxEvent.test (types)) {
		migrateWarn ("Los eventos AJAX deben adjuntarse al documento:" + tipos);
	}
	eventAdd.call (this, elem, hoverHack (types || ""), handler, data, selector);
};
jQuery.event.remove = function (elem, types, handler, selector, mappedTypes) {
	eventRemove.call (this, elem, hoverHack (types) || "", handler, selector, mappedTypes);
};

jQuery.each (["cargar", "descargar", "error"], función (_, nombre) {

	jQuery.fn [name] = function () {
		var args = Array.prototype.slice.call (argumentos, 0);

		// Si esta es una carga ajax (), la primera arg debería ser la cadena URL;
		// técnicamente esto también podría ser el argumento "Cualquier cosa" del evento .load ()
		// ¡lo que demuestra por qué esta estúpida firma ha quedado en desuso!
		// Las compilaciones personalizadas de jQuery que excluyen el módulo Ajax justificadamente mueren aquí.
		if (name === "load" && typeof args [0] === "cadena") {
			devuelve oldLoad.apply (esto, args);
		}

		migrateWarn ("jQuery.fn." + name + "() está en desuso");

		args.splice (0, 0, nombre);
		if (arguments.length) {
			devuelve this.bind.apply (esto, args);
		}

		// Usa .triggerHandler aquí porque:
		// - los eventos de carga y descarga no necesitan burbujas, solo se aplican a ventanas o imágenes
		// - el evento de error no debería pasar a la ventana, aunque lo hace antes de 1.7
		// Ver http://bugs.jquery.com/ticket/11820
		this.triggerHandler.apply (esto, args);
		devuelve esto;
	};

});

jQuery.fn.toggle = function (fn, fn2) {

	// No te metas con animación o css alterna
	if (! jQuery.isFunction (fn) ||! jQuery.isFunction (fn2)) {
		return oldToggle.apply (esto, argumentos);
	}
	migrateWarn ("jQuery.fn.toggle (handler, handler ...) está en desuso");

	// Guardar referencia a argumentos para acceder en el cierre
	var args = argumentos,
		guid = fn.guid || jQuery.guid ++,
		i = 0,
		toggler = function (event) {
			// Descubre qué función ejecutar
			var lastToggle = (jQuery._data (this, "lastToggle" + fn.guid) || 0)% i;
			jQuery._data (esto, "lastToggle" + fn.guid, lastToggle + 1);

			// Asegúrese de que los clics se detengan
			event.preventDefault ();

			// y ejecuta la función
			return args [lastToggle] .apply (esto, argumentos) || falso;
		};

	// vincula todas las funciones, por lo que cualquiera de ellas puede desvincular este manejador de clics
	toggler.guid = guid;
	while (i <args.length) {
		args [i ++] .guid = guid;
	}

	devuelve this.click (toggler);
};

jQuery.fn.live = function (types, data, fn) {
	migrateWarn ("jQuery.fn.live () está en desuso");
	if (oldLive) {
		return oldLive.apply (esto, argumentos);
	}
	jQuery (this.context) .on (types, this.selector, data, fn);
	devuelve esto;
};

jQuery.fn.die = function (types, fn) {
	migrateWarn ("jQuery.fn.die () está en desuso");
	if (oldDie) {
		return oldDie.apply (esto, argumentos);
	}
	jQuery (this.context) .off (types, this.selector || "**", fn);
	devuelve esto;
};

// Convertir eventos globales en eventos desencadenados por documentos
jQuery.event.trigger = function (event, data, elem, onlyHandlers) {
	if (! elem &&! rajaxEvent.test (event)) {
		migrateWarn ("Los eventos globales no están documentados y están en desuso");
	}
	return eventTrigger.call (este, evento, datos, elem || documento, onlyHandlers);
};
jQuery.each (ajaxEvents.split ("|"),
	nombre de la función ) {
		jQuery.event.special [name] = {
			setup: function () {
				var elem = esto;

				// El documento no necesita adornos; debe ser! == para oldIE
				if (elem! == document) {
					jQuery.event.add (document, name + "." + jQuery.guid, function () {
						jQuery.event.trigger (name, Array.prototype.slice.call (arguments, 1), elem, true);
					});
					jQuery._data (this, name, jQuery.guid ++);
				}
				falso retorno;
			},
			desmontaje: función () {
				if (this! == document) {
					jQuery.event.remove (document, name + "." + jQuery._data (this, name));
				}
				falso retorno;
			}
		};
	}
);

jQuery.event.special.ready = {
	setup: function () {
		if (este === documento) {
			migrateWarn (el evento "listo" está en desuso ");
		}
	}
};

var oldSelf = jQuery.fn.andSelf || jQuery.fn.addBack,
	oldFnFind = jQuery.fn.find;

jQuery.fn.andSelf = function () {
	migrateWarn ("jQuery.fn.andSelf () reemplazado por jQuery.fn.addBack ()");
	return oldSelf.apply (esto, argumentos);
};

jQuery.fn.find = function (selector) {
	var ret = oldFnFind.apply (esto, argumentos);
	ret.context = this.context;
	ret.selector = this.selector? this.selector + "" + selector: selector;
	return ret;
};


// jQuery 1.6 no admite Callbacks, no avises allí
if (jQuery.Callbacks) {

	var oldDeferred = jQuery.Deferred,
		tuples = [
			// action, add listener, callbacks, .then handlers, estado final
			["resolver", "hecho", jQuery.Callbacks ("memoria de una vez"),
				jQuery.Callbacks ("una vez memoria"), "resuelto"],
			["rechazar", "fallar", jQuery.Callbacks ("una vez memoria"),
				jQuery.Callbacks ("una vez memoria"), "rechazado"],
			["notificar", "progreso", jQuery.Callbacks ("memoria"),
				jQuery.Callbacks ("memoria")]
		];

	jQuery.Deferred = function (func) {
		var diferido = oldDeferred (),
			promise = deferred.promise ();

		deferred.pipe = promise.pipe = function (/ * fnDone, fnFail, fnProgress * /) {
			var fns = argumentos;

			migrateWarn ("deferred.pipe () está en desuso");

			return jQuery.Deferred (function (newDefer) {
				jQuery.each (tuplas, función (i, tupla) {
					var fn = jQuery.isFunction (fns [i]) && fns [i];
					// deferred.done (function () {bind to newDefer o newDefer.resolve})
					// deferred.fail (function () {bind to newDefer o newDefer.reject})
					// deferred.progress (function () {bind to newDefer o newDefer.notify})
					diferido [tupla [1]] (función () {
						var returned = fn && fn.apply (esto, argumentos);
						if (returned && jQuery.isFunction (returned.promise)) {
							returned.promise ()
								.done (newDefer.resolve)
								.fail (newDefer.reject)
								.progress (newDefer.notify);
						} else {
							newDefer [tuple [0] + "Con"] (
								esto === promesa? newDefer.promise (): esto,
								fn? [devuelto]: argumentos
							);
						}
					});
				});
				fns = null;
			}).promesa();

		};

		deferred.isResolved = function () {
			migrateWarn ("deferred.isResolved está en desuso");
			return deferred.state () === "resolved";
		};

		deferred.isRejected = function () {
			migrateWarn ("deferred.isRejected está en desuso");
			return deferred.state () === "rechazado";
		};

		if (func) {
			func.call (diferido, diferido);
		}

		devolución diferida;
	};

}

}) (jQuery, ventana);