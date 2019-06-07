<section id="contact" class="s-contact">
    <div class="overlay"></div>


    <div class="row section-header" data-aos="fade-up">

        <h1 class="display-2 display-2--light">Hola

            <?php
            echo h($name) . '!';

            ?>
        </h1>

        <h3 class="subhead">Esto te puede interesar</h3>

        <h1 class="display-2 display-2--light">Aprende a bailar para no aburrirte en las fiestas o eventos sociales</h1>
    </div>
    </div>

    <div class="row contact-contentes" data-aos="fade-up">

        <div class="contact-primary">

            <!-- <h3 class="h6">Comp</h3>
            <h3 class="h2">Selecciona</h3>-->

            <!-- contact ver la opccion para suscribirte con correo como gramo
    ================================================== -->

            <div class="col-block service-item" data-aos="fade-up" id="columna1">
                <div class="service-text">
                    <iframe width="500" height="300" align="left" src="https://www.youtube.com/embed/xjx6CJlsEM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h3 class="subhead">Aprende a bailar todo depende de vos</h3>Mira esto te puede ayudar a mejorar tus tecnicas y aprender un poco mas sobre tecnicas de baile
                </div>
            </div>
            <!-- end contact-content -->


           <div id="columna2">
            <form action="/preferences/searchYoutubeVideos" method="GET">
                    <div>
                        <h3 class="subhead">Temas a buscar :</h3>
                        <input type="search" style=" border-style: solid; font-size:12pt; color: #f7f9f7; letter-spacing : 3px; id=" q" name="q" placeholder="Temas Buscados">
                    </div>
                    <div>
                        <h3 class="subhead"> Cantidad de Resultados:</h3>
                        <input type="number" style=" border-style: solid; font-size:12pt; color: #f7f9f7; letter-spacing : 3px; id=" maxResults" name="maxResults" min="1" max="50" step="1" value="10">
                    </div>
                    <div style="text-align: right ;width:300px">
                        <input type="submit" value="Buscar">
                    </div>
                </form>
            </div>

        </div>

        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-text">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/a9lrwMlnWrg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>




            <div class="service-text">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/pGbedkOqHIc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-text">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/dM8DNMbpSq8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>



            <div class="service-text">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/lCTwmuoOWtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>

        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-text">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/Njct-y21ccc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>



            <div class="service-text">
                <iframe width="450" height="250" src="https://www.youtube.com/embed/DEF3bFlPM_U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>




         <div style="text-align: left ;width:1200px">
               <input type="button" value="Volver" onclick="javascript:history.back(-1);"/>
            </div>



    </div>
    <!-- end contact-primary -->
    </div>
    <!-- end contact-content -->

</section>