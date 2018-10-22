@extends('layout')
@section('formularios')
<div id="portfolio" class="section md-padding2 bg-grey">
		<div>
            <div class="row">
                <div class="col-sm-3">
					<div class="menu-form2">
                        <a href="#" id="about"><strong>Acerca de</strong></a>
                        <a href="#" id="mision"><strong>Mision</strong></a>
                        <a href="#" id="vision"><strong>Vision</strong></a>
                        <a href="#" id="objetivo"><strong>Objetivo</strong></a>
                        <a href="#" id="valores"><strong>Valores</strong></a>
                        <a href="#" id="mi"><strong>Memorias Institucional</strong></a>
                        <a href="#" id="ce"><strong>Consejo Directivo</strong></a>
                    </div>
				</div>
                <DIV class="col-sm-8 descripcion">
                    <h2 id="titulo"></h2>
                    <div id="contenido">
                        <p>La Federación de Empresarios Privados de Potosí, se constituye en una institución que no desarrolla actividades político partidarias, con un Comité Ejecutivo renovado con el único objetivo de trabajar  de manera transparente en beneficio del sector privado, compartiendo sus conocimientos y habilidades necesarias para promover eficazmente la creatividad y la innovación empresarial.</p>
                        <p>Ahora más que nunca esta fortalecida institucionalmente, por dos razones fundamentales, la primera por el apoyo de sus afiladas y el trabajo transparente que se realiza en el desarrollo de todas las actividades y la segunda razón es por el buen relacionamiento institucional que se tiene con el sector privado y público a nivel local, nacional e internacional, demostrando que la FEPP no desarrolla actividades político-partidarias, al  buscar alternativas de desarrollo para nuestro departamento y el país.</p>
                    </div>
                </DIV>
                <div class="col-sm-1"></div>
            </div>
        </div>
</div>
<script>
 'use strict'
    var fepp = "La Federación de Empresarios Privados de Potosí, se constituye en una institución que no desarrolla actividades político partidarias, con un Comité Ejecutivo renovado con el único objetivo de trabajar  de manera transparente en beneficio del sector privado, compartiendo sus conocimientos y habilidades necesarias para promover eficazmente la creatividad y la innovación empresarial.";
    var fepp2 = "Ahora más que nunca esta fortalecida institucionalmente, por dos razones fundamentales, la primera por el apoyo de sus afiladas y el trabajo transparente que se realiza en el desarrollo de todas las actividades y la segunda razón es por el buen relacionamiento institucional que se tiene con el sector privado y público a nivel local, nacional e internacional, demostrando que la FEPP no desarrolla actividades político-partidarias, al  buscar alternativas de desarrollo para nuestro departamento y el país.";
    var mision = "Ser una entidad que concentre al sector empresarial privado, promoviendo el fortalecimiento y desarrollo institucional, velando los intereses jurídicos, económicos, sociales de nuestros afiliados, generando participación activa en el progreso departamental y nacional. "
    var objetivo = "Promover la participación del sector empresarial en aspectos de interés local y regional, que coadyuve al desarrollo productivo, económico social y turístico del departamento, sustentando la filosofía de la libre empresa y la economía del mercado, como bases esenciales de dicho proceso.";
    var vision = "Ser una entidad líder representativa e influyente, prestigiosa y solvente, reconocida por su contribución al desarrollo productivo, económico social y turístico del Departamento de Potosí.";
    var valores ="En el desarrollo de las actividades y tareas se trabaja cumpliendo los siguientes valores:";
    var ops = document.querySelector(".menu-form2");
    var titulo = document.querySelector("#titulo");
    var contenido = document.querySelector("#contenido");
    var op = ops.querySelectorAll("a");
    op[0].addEventListener(('click'),function(){
        $("#contenido").empty();
        titulo.innerHTML = "Acerca de";
        let p = document.createElement("p");
        let text = document.createTextNode(fepp);
        p.appendChild(text);
        contenido.appendChild(p);
        p = document.createElement("p");
        text = document.createTextNode(fepp2);
        p.appendChild(text);
        contenido.appendChild(p);
    });
    op[1].addEventListener(('click'),function(){
        $("#contenido").empty();
        titulo.innerHTML = "Mision";
        let p = document.createElement("p");
        let text = document.createTextNode(mision);
        p.appendChild(text);
        contenido.appendChild(p);
    });
    op[2].addEventListener(('click'),function(){
        $("#contenido").empty();
        titulo.innerHTML = "Vision";
        let p = document.createElement("p");
        let text = document.createTextNode(vision);
        p.appendChild(text);
        contenido.appendChild(p);
    });
    op[3].addEventListener(('click'),function(){
        $("#contenido").empty();
        titulo.innerHTML = "Objetivos";
        let p = document.createElement("p");
        let text = document.createTextNode(objetivo);
        p.appendChild(text);
        contenido.appendChild(p);
    });
    op[4].addEventListener(('click'),function(){
        $("#contenido").empty();
        titulo.innerHTML = "Valores";
        let p = document.createElement("p");
        let text = document.createTextNode(valores);
        p.appendChild(text);
        contenido.appendChild(p);
        let ul = document.createElement("li");
        ul.appendChild(texto("Ética y Transparencia."));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto("Trabajo en Equipo y Responsabilidad."));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto(" Objetividad y Participación. "));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto("Profesionalidad e Innovación."));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto("Honestidad y Humildad."));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto("Integridad y Solidaridad."));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto("Respeto por la Madre Tierra."));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto("Entusiasmo y Flexibilidad."));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto("Pro actividad e Iniciativa."));
        p.appendChild(ul);
        ul.style.margin = " 0 0 0 15px";
        ul = document.createElement("li");
        ul.appendChild(texto("Responsabilidad Social Empresarial."));
        p.appendChild(ul);

        ul.style.margin = " 0 0 0 15px";
    });
    function texto(text){
        return document.createTextNode(text);
    }
    op[5].addEventListener(('click'),function(){
        $("#contenido").empty();
        titulo.innerHTML = "Memoria Institucional";
         let div1 = document.createElement("div");
        div1.setAttribute("class","testimonial");
        contenido.appendChild(div1);
        let div2 = document.createElement("div");
        div2.setAttribute("class", "testimonial-meta");
        div1.appendChild(div2);
        div1 = div2;
        
        div2 = document.createElement("a");
        div2.setAttribute("href", "doc/RevistaFinal.pdf");
        div2.setAttribute("class", "btn btn-primary");
        div2.setAttribute("target", "_blank");
        div2.appendChild(texto("Descargar Memoria Insitucional 2016 - 2017"));
        div1.appendChild(div2);
    });
    op[6].addEventListener(('click'),function(){
        $("#contenido").empty();
        titulo.innerHTML = "Comite Ejecutivo";
        llenado("Oscar Gregorio Gardeazabal Paputsachis","PRESIDENTE","./img/p1.png");
        llenado("Ricardo Cruz Limachi","PRIMER VICEPRESIDENTE","./img/p2.png");
        llenado("Edwin Ugarte La Torre","SEGUNDO VICEPRESIDENTE","./img/p3.png");
        llenado("Gunnar Armijo Cassis","TESORERO","./img/p4.png");
        llenado("Roberto Pinto Thaine","REPRESENTANTE NACIONAL","./img/p5.png");
        llenado("Romer Armando Gutiérrez Suyo ","GERENTE GENERAL","./img/p6.png");
    });
    function llenado(nombre, cargo, img){
        let div1 = document.createElement("div");
        div1.setAttribute("class","testimonial");
        contenido.appendChild(div1);
        let div2 = document.createElement("div");
        div2.setAttribute("class", "testimonial-meta");
        div1.appendChild(div2);
        div1 = div2;
        div2 = document.createElement("img");
        div2.setAttribute("src", img);
        div1.appendChild(div2);
        
        div2 = document.createElement("h3");
        div2.setAttribute("class", "white-text");
        div2.appendChild(texto(nombre));
        div2.style.color = "#323333";
        div1.appendChild(div2);
        
        div2 = document.createElement("span");
        div2.appendChild(texto(cargo));
        div1.appendChild(div2);
        
    }
</script>
@endsection
