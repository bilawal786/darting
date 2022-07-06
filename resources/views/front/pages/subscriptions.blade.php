@extends('front.layouts.layout')

@section('content')

    <!-- ==========login Section start Here========== -->
    <div class="page-header-section style-1 login-section padding-tb">
        <div class=" container">
            @foreach($subscriptions as $subscription)
            <div class="account-wrapper" style="max-width: 1000px">
                <h3 class="title">{{$subscription->name}}</h3>
                <h6 class="title">{{$subscription->description}}</h6>
                <h1 class="title">{{$subscription->price}} €  <small style="font-size: 20px">/ par mois</small></h1>
                <div class="form-group">
                    <form method="POST" action="{{ route('subscription.buy',['id'=>$subscription->id]) }}" id="payment-form" data-secret="{{$intent->client_secret}}" class="paymentformsubmit" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="key" value="price_1LIRrHD7gIuku9edqxKmQG23">
                        <input type="hidden" name="price" value="{{$subscription->price}}">

                        <div class="input_group">
                            <label for="card-holder-name" class="margin-t-20" style="font-size: 15px;"> <strong>Nom du titulaire</strong> <strong style="color: red;">*</strong></label>
                            <input type="text" id="card-holder-name" name="card_holder_name" class="form-control"  placeholder="Nom du titulaire">

                        </div>

                        <div class="form-group input-lined">
                            <div class="form-group stripe-payment-method-div">
                                <div id="card-element"></div>
                                <div id="card-errors" class="text-danger" role="alert"></div>
                            </div>
                            <label for="description" class="margin-t-20" style="font-size: 15px;"> </label><br>

                        </div>
                    <button id="card-button" style="width: 100%" class="d-block lab-btn"><span>Acheter maintenant</span></button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- ==========Login Section ends Here========== -->

    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script>
        // Create a Stripe client.
        var stripe =Stripe ('pk_test_51IZ8jfD7gIuku9edlByPjJwtRcWSL1qCI8ehxGa5xSz8SPZl6khh3Kll9fJVzyP2a6k9nK7xLtvOtI8ujl9B5MQC00eyBZQwgu');
        // Create an instance of Elements.

        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element // (Note that this demo uses a wider set of styles than the guide below.)
        var style= {
            base: {
                color: "#32325d",
                fontFamily: "'Helvetica Neue', Helvetica, sans-serif",
                fontSmoothing: "antialiased",
                fontSize: "16px",
                '::placeholder': {
                    color: "#aab7c4",
                }
            },
            invalid: {
                color: "#fa755a",
                iconColor: '#fa755a',
            }
        };

        // Create an instance of the card Element.

        var card = elements.create("card", {
            style: style
        });
        // Add an instance of the card Element into the card-element <div

        card.mount('#card-element');
        // Handle real time validation errors from the card Element. var displayError document.getElementById("card-errors")
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');

            if(displayError) {
                displayError.textContent = event.error.message;
            }
            else{
                displayError.textContent ="";
            }

        });
        var form = document.getElementById('payment-form');
           console.log(form);
        var clientSecret = form.dataset.secret;
        const cardHolderName = document.getElementById('card-holder-name');
        form.addEventListener('submit', async function(event) {
            event.preventDefault();
            const {
                setupIntent,
                error,

            }= await  stripe.confirmCardSetup(

                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: cardHolderName.value
                        }

                    }
                }
            );
            if (error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById("card-errors");
                errorElement.textContent = error.message;

            } else {
                // The card has been verified successfully...
                stripeTokenHandler (setupIntent.payment_method);
            }
        });

        function stripeTokenHandler(payment_method) {

            //Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById("payment-form");
            console.log(1);
            var hiddenInput = document.createElement('input');

            hiddenInput.setAttribute('type','hidden');
            hiddenInput.setAttribute('name', 'paymentMethodId');
            hiddenInput.setAttribute('value', payment_method)
            form.appendChild(hiddenInput);
            console.log(form.appendChild(hiddenInput));
            // Submit the form
            form.submit();
        }

    </script>


@endsection
