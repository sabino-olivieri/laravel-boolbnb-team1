<div class="ms_sidebar ms_hidden-sidebar d-flex align-items-center justify-content-center" id="pay-sidebar">
    <div class="container-fluid">
        <i class="fa-solid fa-xmark ms_close" onclick="showSidebar()"></i>
        <form id="payment-form" action="{{ route('admin.checkout') }}"
            class="d-flex justify-content-center align-content-center flex-column" method="POST">
            @csrf
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($sponsors as $sponsor)
                            @php
                                $durationEx = explode(':', $sponsor->duration);
                                $amountH = $durationEx[0];
                                $plans = ['Basic', 'Premium', 'Elite'];
                            @endphp
                            {{-- Colonna --}}
                            <input type="radio" class="d-none" name="sponsor_id" value="{{ $sponsor->id }}"
                                id="{{ $sponsor->id }}" onclick="selectedSponsor(this)">
                            <div class="col-sm-12 col-md-4 justify-content-center d-flex g-2 gap-2 ms_transition-7">
                                <label for="{{ $sponsor->id }}" class="ms_transition-7 label-sponsor">
                                    {{-- Card --}}
                                    <div class="price-table ms_transition-7">
                                        {{-- Header --}}
                                        <div class="price-head" id="head-tab-pr" data-sponsor-id="{{ $sponsor->id }}">
                                            <p class="fs-3">{{ $plans[$loop->index] }}</p>
                                            <p class="d-md-none"><small class="description">Sponsorizzati in Homepage ed entra nella categoria
                                                    <b><i>In Evidenza</i></b></small></p>
                                                </div>
                                                {{-- Corpo --}}
                                                <div class="price-content">
                                                    <ul class="p-2">
                                                        <li ><small class="mb-1"> Presenza premium in HomePage!</small><br>
                                                            <h2>€{{ $sponsor->price }}/{{ $amountH }}h</h2></li>
                                                        
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- Fine Card --}}
                                </label>
                            </div>
                            {{-- Fine Colonna --}}
                        @endforeach
                    </div>
                </div>

            </div>
            <input type="hidden" name="amount" id="amount" value="">
            <input type="hidden" name="flat_id" value="{{ $flat->id }}">

            <div id="dropin-container" class="mx-auto"></div>
            <input type="hidden" name="payment_method_nonce" id="payment_method_nonce">
            <div class="d-flex align-items-center justify-content-center gap-3 d-none" id="pay-btns">
                <button type="button" class="btn btn-danger" onclick="showSidebar()">Annulla</button>
                <button type="submit" class="btn ms_btn-sponsor">Sponsorizza</button>
            </div>
        </form>
    </div>
</div>


<style lang="scss">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


    .ms_active {
        width: 100%;
        z-index: 9999;
    }

    .ms_transition-7 {
        transition: all 0.7s;
    }

    input[type="radio"]:checked+div label {
        /* box-shadow: 4px 4px 0px white; */
        color: white;
        transform: translateY(-20px);
    }

    input[type="radio"]:checked+div label #head-tab-pr {
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
        transition: all 0.7s;

    }

    input[type="radio"]:checked+div label #head-tab-pr p{
        text-decoration: underline;
    } 

    input[type="radio"]:checked+div label ul li h2{
        font-size: 2.5rem;
        font-weight: 700;
        transition: all 0.7s;
    }
    /* Old Card */

    /* New Card */
    .price-table {
        text-align: center;
        overflow: hidden;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        color: white;
        margin: 10px;
        background: #fff;
        cursor: pointer;
        box-sizing: border-box;
        box-shadow: inset 0 0 40px rgba(0, 0, 0, .2), 0 20px 50px rgba(0, 0, 0, .5);
        border-radius: 20px;
        transition: all 0.7s;
    }

    .price-table:hover {
        transform: translateY(-20px);
        transition: all 0.7s;
        box-shadow: none;
    }

    #head-tab-pr {
        padding: 12px;
        background: linear-gradient(45deg, rgba(51, 49, 45, 1) 2%, rgba(112, 93, 63, 1) 60%, rgba(248, 242, 235, 1) 100%);
        transition: all 0.7s;
    }

    .price-table:hover #head-tab-pr {
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
        transition: 0.7s;
    }

    .price-table .price-head h4 {
        text-transform: uppercase;
        margin: 0;
        padding: 0;
        color: #fff;
        font-weight: 700;
    }

    .price-table .price-head h2 {
        margin: 0;
        padding: 12px 24px 0;
        font-size: 1.5rem;
        color: #fff;
    }

    .price-content {
        position: relative;
    }

    .price-content ul {
        position: relative;
        margin: 0;
        padding: 20px 0;
    }

    .price-content ul li {
        list-style: none;
        font-size: 1rem;
        padding: 12px 16px;
        color: #777;
        cursor: pointer;
        transition: .7s;
    }

    /* Media query per schermi piccoli (telefoni) */
    @media (max-width: 767px) {
        .price-table:hover {
            transform: none;
            transition: all 0.7s;
        }

        .price-table:hover {
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
            transition: 0.7s;
        }

        .price-table {
            margin: 0;
        }

        /* Al Check */
        input[type="radio"]:checked+div label {
            /* box-shadow: 4px 4px 0px white; */
            color: white;
            transform: none;
            transition: all 0.7s;
        }

        input[type="radio"]:checked+div #head-tab-pr {
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
            transition: 0.7s;
        }

        input[type="radio"]:checked+div .price-table {
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
            transition: 0.7s;
        }

        /* Non checkate */
        input[type="radio"]:no- .price-table #head-tab-pr {
            padding: 20px;
        }

        .price-table .price-content {
            display: none;
        }
    }
</style>

<script src="https://js.braintreegateway.com/web/dropin/1.43.0/js/dropin.js"></script>
<script>
    const sideBarElem = document.getElementById('pay-sidebar');
    /* console.log(sideBarElem); */
    const sponsorBtn = document.getElementById('sponsor-btn');

    const payBtns = document.getElementById('pay-btns');

    function showSidebar() {
    const sidebar = document.getElementById('pay-sidebar');
    const overlay = document.getElementById('overlay');
    const parentContainer = document.querySelector('.container');

    if (sidebar.classList.contains('ms_hidden-sidebar')) {
        // Mostra la sidebar e l'overlay
        sidebar.classList.remove('ms_hidden-sidebar');
        sidebar.classList.add('ms_visible-sidebar');
        overlay.classList.add('visible');
        overlay.classList.remove('hidden');
        parentContainer.classList.add('dimmed'); // Riduci l'opacità
    } else {
        // Nascondi la sidebar e l'overlay
        sidebar.classList.add('ms_hidden-sidebar');
        sidebar.classList.remove('ms_visible-sidebar');
        overlay.classList.remove('visible');
        overlay.classList.add('hidden');
        parentContainer.classList.remove('dimmed'); // Ripristina l'opacità
    }
}

  function selectedSponsor(selectedRadio) {
    // Ottieni l'ID dell'input radio selezionato
    const selectedId = selectedRadio.id;

    // Seleziona tutti i contenitori di card con la classe 'price-head'
    const allPriceHeads = document.querySelectorAll('.price-head');

    // Cicla attraverso tutti i contenitori di card
    allPriceHeads.forEach(priceHead => {
        // Ottieni l'ID del sponsor da data-sponsor-id
        const sponsorId = priceHead.getAttribute('data-sponsor-id');

        // Verifica se l'ID della card è uguale a quello selezionato
        if (sponsorId === selectedId) {
            // Mostra il paragrafo per la card selezionata
            priceHead.querySelector('.description').style.display = 'block';
        } else {
            // Nascondi il paragrafo per le card non selezionate
            priceHead.querySelector('.description').style.display = 'none';
        }
    });
}

    function clickedOnActive(){
        
    }

    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('payment-form');

        const radios = document.querySelectorAll('input[name="sponsor_id"]');

        radios.forEach(radio => {

            radio.addEventListener('change', (event) => {
                const dropinElem = document.querySelector('.braintree-card')

                if (event.target.checked && !dropinElem) {

                    /* console.log(`Selezionato: ${event.target.value}`); */


                    // Recupera il token del client dal server
                    fetch('{{ route('admin.client_token') }}')
                        .then(response => response.json())
                        .then(data => {
                            var clientToken = data.clientToken;
                            /* console.log(clientToken); */

                            braintree.dropin.create({
                                authorization: clientToken,
                                container: '#dropin-container',
                                locale: 'it'
                            }, function(createErr, instance) {
                                if (createErr) {
                                    console.error(createErr);
                                    return;
                                }
                                payBtns.classList.remove('d-none');
                                form.addEventListener('submit', function(event) {
                                    event.preventDefault();

                                    instance.requestPaymentMethod(function(
                                        err, payload) {
                                        if (err) {
                                            console.error(err);
                                            return;
                                        }

                                        // Inserisci il nonce nel modulo e invia
                                        document.getElementById(
                                                'payment_method_nonce'
                                            ).value =
                                            payload.nonce;
                                        form.submit();
                                    });
                                });
                            });
                        })
                        .catch(() => {
                            console.error('Errore nella transazione');
                        });
                }
            });
        });

    });
</script>
