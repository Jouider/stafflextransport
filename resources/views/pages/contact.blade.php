<x-master title="Contact">
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container contact-page py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1 class="mb-4">GET IN TOUCH</h1>
                    <p class="mb-4">Si vous avez des questions ou des demandes de renseignements, n'hésitez pas à nous contacter en remplissant le formulaire ci-dessous. Nous serions ravis de vous aider.</p>
                    <div class=" p-4" style="background-color: #cfe3ee;">
                        <form action={{ route('contactpage.store') }} method="POST">
                            @csrf
                            <input type="hidden" name="_language" value="fr" />
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" placeholder="Nom Complet" value="{{old('name')}}">
                                        <label for="name">Nom Complet</label>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" placeholder="Adresse E-mail" value="{{old('email')}}">
                                        <label for="email">Adresse E-mail</label>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" placeholder="Sujet" value="{{old('subject')}}">
                                        <label for="subject">Sujet</label>
                                        @error('subject')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="message">{{old('message')}}</textarea>
                                        <label for="message">Message</label>
                                        @error('message')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn text-light w-100 py-3" type="submit" style="background-color: #0077b6;">Envoyer </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=mmeuble%20818,%20529%20Bd%20Al%20Qods,%20Casablanca+(public%20media%20)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-master>