<?php
    $nombre = 'Fulanito Fulanitoso';
    
    echo $plantilla = "
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #ebebeb;
        font-family: Arial, Helvetica, sans-serif;
        
    }
    
    .cabecera{
        display: flex;
        height: 80px;
        width: 100%;
        justify-content: center;
        margin: 20px 0px 50px;
    }
    
    .info{
        height: 500px;
        width: 100%;
        display: grid; 
        justify-items: center;
    }
    .info__automatico{
        display: flex;
        justify-content: center;
    }
    .info__automatico-titulo{
        margin-bottom: 60px;
    }
    .info__automatico-text{
        color: #626466;
        font-size: 0.85em;
    }
    
    .info__grid{
        display: grid;
        grid-gap: 1rem;
        justify-content: center;
        width: 60%;
        grid-template-columns: repeat(2,1fr);
        grid-gap: 1.5rem;
        line-height: 30px;
    }
    .info__alumno{
        grid-row: 1/3;       
    }
    .info__titulo{
        text-align: center;
    }
    .info__academicos{
        grid-column: 1/3;
    }
    .info__automatico-text{
        padding-top: 30px;
    }
       
</style>
<head>
    <meta http-equiv='Content-type' content='text/html; charset=utf-8'/>
</head>
<body>
    <header class='cabecera'>
        <img src='./public/img/logo.webp' alt='Logo Thinkers'>
    </header>

    <section class='info'>
        <div class='info__automatico'>
            <h1 class='info__automatico-titulo'>Ficha de Inscripción</h1>
        </div>
        <div class='info__grid'>
            <div class='info__alumno'>
                <h2 class='info__titulo'>Alumno</h2>
                <p>Nombre: {$nombre}</p>  <!-- Aquí van las variables respectivas -->
                <p>E-mail:</p>
                <p>WhatsApp:</p>
                <p>Facebook:</p>
                <p>Edad:</p>
                <p>Domicilio:</p>
            </div>
            <div class='info__tutor'>
                <h2 class='info__titulo'>Tutor</h2>
                <p>Nombre:</p>
                <p>Celular:</p>
            </div>
            <div class='info__referencia'>
                <h2 class='info__titulo'>Referencia</h2>
                <p>Me enteré de Thinkers por medio de:</p>
                <p>Prefiero el horario:</p>
            </div>
            <div class='info__academicos'>
                <h2 class='info__titulo'>Datos Académicos</h2>
                <p>Universiidad:</p>
                <p>Carrera:</p>
                <p>Escuela de Procedencia</p>
                <p>Quiero ingresar a la universidad porque:</p>
            </div>
        </div>
        <div class='info__automatico'>
            <p class='info__automatico-text'>Mensaje generado por el sistema de inscripciones de Thinkers</p>
        </div>
    </section>
</body>";
