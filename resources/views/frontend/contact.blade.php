@extends('frontend.template')

@section('content')
    <footer id="footer" class="section-bg">
        <div class="footer-top mx-5 my-3">
            <div class="mx-5 my-3">

                <div class="row">
                    <div class="col-lg-6">
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.6936242213565!2d4.33902491574609!3d50.85535747953331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c1f62184f%3A0x9e4964fedbf925c8!2sPlace%20de%20la%20Minoterie%2010%2C%201080%20Molenbeek-Saint-Jean!5e0!3m2!1sfr!2sbe!4v1609265354987!5m2!1sfr!2sbe" width="540" height="540" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <div class="col-lg-6">


                        <div class="form">

                            <h4>Contactez-nous</h4>
                            <p>Vous avez une question à nous poser ? Une proposition a nous faire ? </p>

                            <form action="/send-email" method="post" role="form" class="php-email-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom"
                                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                        data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet"
                                        data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Message" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>

                                <div class="mb-3">
                                    <div class="loading">Chargement</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Votre message a été envoyé. Merci!</div>
                                </div>

                                <div class="text-center"><button type="submit" title="Send Message">ENVOYER</button></div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    @endsection
