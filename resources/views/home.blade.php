@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Preguntas frecuentes</h1>
        <div class="accordion " id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        ¿Cómo funciona esta plataforma web?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <strong>¡Bienvenido/a a nuestra página web de eventos!</strong> Aquí encontrarás una amplia variedad
                        de cursos, en su mayoría gratuitos, para ayudarte a mejorar tus habilidades y conocimientos en
                        diferentes áreas. Nuestros cursos están diseñados por expertos en cada materia y se enfocan en
                        proporcionar contenido relevante y de alta calidad para que puedas aprender de forma efectiva.
                        <br>
                        Para empezar simplemente debes ir a la seccion de <code>Eventos</code> en el menu superior.
                        <br>
                        En nuestra plataforma, encontrarás cursos en áreas como programación, diseño, negocios, marketing
                        digital, idiomas y muchos más. Además, ofrecemos una experiencia de aprendizaje flexible y accesible
                        para adaptarse a tus horarios y necesidades.
                        <br>
                        No importa si eres un principiante o un experto, nuestra plataforma te ofrece oportunidades para
                        aprender y mejorar tus habilidades, avanzar en tu carrera y alcanzar tus objetivos personales.
                        ¡Explora nuestra página y descubre los cursos que mejor se adapten a tus necesidades!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        ¿Como obtengo mis certificados?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>En nuestra plataforma</strong>, ofrecemos
                        certificados de finalización para muchos de nuestros eventos. Para obtener un certificado,
                        simplemente debes completar todos los requisitos del evento, incluyendo la asistencia a dicho
                        evento.
                        <br>
                        Una vez que hayas completado todos los requisitos del curso, el certificado estará disponible para
                        que lo descargues en formato PDF desde la sección de <code>"Certificados"</code> de tu <code>perfil
                            de usuario.</code> En la
                        mayoría de los casos, nuestros certificados son gratuitos y no se requiere ningún tipo de pago
                        adicional para obtenerlos a través de nuestra página web.
                        <br>
                        Sin embargo, es importante tener en cuenta que algunos cursos pueden tener requisitos adicionales
                        para obtener el certificado, como un puntaje mínimo en las evaluaciones o la presentación de un
                        proyecto final. Asegúrate de leer cuidadosamente los requisitos del curso antes de comenzar para
                        asegurarte de obtener el certificado al finalizar el curso.
                        <br>
                        ¡Esperamos que esta respuesta haya sido útil! Si tienes alguna otra pregunta o necesitas ayuda
                        adicional, no dudes en contactarnos a través de nuestro formulario de contacto en la página web.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        ¿Cuánto tiempo tardaré en recibir mi certificado después de completar el evento en línea?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>Si bien el tiempo de entrega de los certificados puede variar según el evento y la
                            plataforma de emisión de los certificados,</strong> en nuestro caso, los certificados estarán
                        disponibles para descargar entre 1 y 2 semanas después de haber completado el evento en línea. Este
                        tiempo nos permite verificar y validar la información de los participantes y garantizar que los
                        certificados sean emitidos con precisión y calidad. Una vez que estén listos, los certificados
                        estarán disponibles para descargar desde la sección correspondiente en nuestra plataforma.
                        ¡Esperamos que esta información te sea de ayuda!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFour">
                        ¿Tengo que pagar algún costo adicional para obtener el certificado?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                        <strong>Los eventos que ofrecen certificados en línea no requieren que se pague un costo adicional
                            para obtenerlos.</strong> en nuestro caso, los certificados estarán
                        Sin embargo, hay algunos eventos que pueden tener requisitos adicionales para obtener el
                        certificado, como asistir a todas las sesiones o completar ciertas tareas.
                        <br>
                        Es importante leer cuidadosamente la descripción del evento y los requisitos para obtener el
                        certificado antes de registrarse para asegurarse de entender lo que se espera y cumplir con los
                        criterios necesarios. En algunos casos, puede ser necesario pagar una tarifa de registro para
                        asistir al evento en sí, pero eso no necesariamente se relaciona con el costo de obtener el
                        certificado en línea.
                        <br>
                        En resumen, en la mayoría de los casos, no es necesario pagar un costo adicional para obtener un
                        certificado en línea en un evento que lo ofrezca. Sin embargo, es importante leer los requisitos
                        para obtener el certificado antes de registrarse para asegurarse de cumplir con los criterios
                        necesarios.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFive">
                        ¿Cómo puedo registrarme para un evento en línea?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingFive">
                    <div class="accordion-body">
                        <strong>Para registrarte en uno de nuestros eventos en línea y obtener la oportunidad de recibir un
                            certificado gratuito, sigue estos sencillos pasos:</strong>
                        <br>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Dirígete a nuestra página web de eventos y busca el evento en línea al que deseas asistir.
                            </li>
                            <li class="list-group-item">Revisa la información del evento, incluyendo la fecha, hora, tema y
                                los requisitos para obtener el certificado de participación.</li>
                            <li class="list-group-item">Si deseas inscribirte en el evento, haz clic en el botón
                                "Inscribirse" que aparece en la página del evento.</li>
                        </ul>
                        <br>
                        ¡Y listo! Ahora estás registrado en el evento y podrás participar en él para tener la oportunidad de
                        recibir un certificado gratuito al completar los requisitos necesarios. Si tienes alguna pregunta o
                        necesitas ayuda adicional, no dudes en ponerte en contacto con nuestro equipo de soporte a través de
                        la página web.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseSix">
                        ¿Todos los eventos en línea ofrecen certificados de participación?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingSix">
                    <div class="accordion-body">
                        <strong>No necesariamente todos los eventos en línea ofrecen certificados de participación.</strong>
                        En nuestra plataforma, los eventos que ofrecen certificados gratuitos serán claramente identificados
                        en la página de información del evento. En algunos casos, los certificados pueden estar disponibles
                        solo para los participantes que cumplan con ciertos requisitos, como asistir a todas las sesiones o
                        completar ciertas tareas o evaluaciones.
                        <br>
                        Es importante que leas cuidadosamente la información del evento antes de registrarte para determinar
                        si se ofrece un certificado de participación y si existen requisitos específicos que debas cumplir
                        para obtenerlo. En cualquier caso, siempre estaremos disponibles para responder cualquier pregunta
                        que tengas y brindarte la ayuda que necesites durante el proceso de registro y participación en el
                        evento.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
