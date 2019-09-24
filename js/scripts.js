$(document).ready(function () {
    (function(){
        var figures = document.querySelectorAll('figure');
        inView( '.demo-content4' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("class", "tarjeta_inicio")
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        } );
        inView( '.demo-content' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.className="grid_img_11";
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        } );
        inView( '.demo-content3' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("class", "imagen_icono_categoria")
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        } );
        inView( '.mySlides' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("width", "100%")
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        } );
        inView( '.demo-content5' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            var classe=img.attributes.getNamedItem("class").value;
            var alt=img.attributes.getNamedItem("alt").value;
            var onerrore=img.attributes.getNamedItem("onerrore").value;
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("class", classe);
                newImg.setAttribute("alt", alt);
                newImg.setAttribute("onerror", onerrore);
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        } );
        inView( '.demo-content6' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            var id=img.attributes.getNamedItem("id").value;
            var classe=img.attributes.getNamedItem("class").value;
            var alt=img.attributes.getNamedItem("alt").value;
            var onerrore=img.attributes.getNamedItem("onerror").value;
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("class", classe);
                newImg.setAttribute("id", id);
                newImg.setAttribute("alt", alt);
                newImg.setAttribute("onerror", onerrore);
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        } );
        inView( '.demo-content7' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            var classe=img.attributes.getNamedItem("class").value;
            var onerrore=img.attributes.getNamedItem("onerror").value;
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("class", "imagen_panel_pequeña");
                newImg.setAttribute("onerror", onerrore);
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        } );
        inView( '.demo-content10' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            var nivel=figure.attributes.getNamedItem("nivel").value;
            var onerrore=img.attributes.getNamedItem("onerror").value;
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("onerror", onerrore);
                newImg.setAttribute("width", "100%");
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        } );    
        inView( '.demo-content9' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            var id=img.attributes.getNamedItem("id").value;
            var classe=img.attributes.getNamedItem("class").value;
            var onerrore=img.attributes.getNamedItem("onerror").value;
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );;
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("class", classe);
                newImg.setAttribute("id", id);
                newImg.setAttribute("onerror", onerrore);
                newImg.setAttribute("width", "100%");
                newImg.setAttribute("height", "300px");
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        }); 
        inView( '.demo-content-buscador-producto' ).on( 'enter', function( figure ) {
            var img = figure.querySelector( 'img' );
            var classe=img.attributes.getNamedItem("class").value;
            var onerrore=img.attributes.getNamedItem("onerror").value;
            if (  'undefined' !== typeof img.dataset.src ) {
                figure.classList.add( 'is-loading' );;
                newImg = new Image();
                newImg.src = img.dataset.src;
                newImg.setAttribute("class", classe);
                newImg.setAttribute("onerror", onerrore);
                newImg.setAttribute("width", "100%");
                newImg.addEventListener( 'load', function() {
                    figure.innerHTML = '';
                    figure.appendChild( this );
                    setTimeout( function() {
                        figure.classList.remove( 'is-loading' );
                        figure.classList.add( 'is-loaded' );
                    }, 300 );
                } );
            }
        }); 
    })();
} );
