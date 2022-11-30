@extends('layout')
@section('content')
  

    <section class="contacte">
        <div class="row-banner-header">
            <img src="./img/headerLogo.png" alt="">
            <a href="{{ url('/') }}" class="acceuil text-cente">Acceuil <span class="text-center"> > ESPAV FORMATIONS
                </span> </a>
            <h1 class="text-center">Nous Contacter</h1>
        </div>
    </section>



    <section class="contacte1">

        <div class="main-cards flex-item">
            <div class="centre_small">
                <div class="contenu_editable">
                    <h2 class="mt-4 text-center">Nous téléphoner :</h2>
                    <p><a class="cta_btn" href="#">0524302099</a></p>
                    <p><a class="cta_btn" href="#">0660900274</a></p>

                    <h2 class="text-center">Nous rejoindre :</h2>
                    <p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13584.715589259566!2d-8.0043118!3d31.656325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x791d5928f17edd94!2sESPAV%20-%20Marrakech%20(%C3%89cole%20sp%C3%A9ciale%20de%20la%20production%20audiovisuelle%20et%20m%C3%A9tiers%20de%20la%20presse)!5e0!3m2!1sfr!2sma!4v1650862653891!5m2!1sfr!2sma"
                            width="600" height="450" style="border:0;" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="mx-auto"></iframe>
                    </p>
                    <h2 class="text-center">Nous contacter :</h2>
                    <form action="" method="post">
                        @csrf 
                        <div class="col-md-12 mx-auto p-5 m-3">
                        @if(session()->has('message'))
                            <div class="alert alert-secondary w-100">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                            <div class="form-group mx-auto">
                                <input type="text" class="my-3" value="{{ old('nom') }}" name="nom" placeholder=" votre nom">
                                @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="text" class="my-3" value="{{ old('email') }}"  name="email" placeholder="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="text" class="my-3" name="Message" 
                                placeholder="Message">
                            </div>
                            <div class="col-md-8 mx-auto">
                            <input type="submit" value="envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>


@endsection