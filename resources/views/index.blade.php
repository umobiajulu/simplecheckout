<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from gateway-challenge.surge.sh/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 15:17:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://gateway-challenge.surge.sh/style.css" />

    <link rel="preconnect" href="/fonts.googleapis.com/index.html" />
    <link rel="preconnect" href="/fonts.gstatic.com/index.html" crossorigin />
    <link href="/fonts.googleapis.com/css26f38.css?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />

    <title>Gateway challenge</title>
  </head>
  <body>
    <div class="container">
      <header>
        <a href="index.html" class="logo">
          <img src="https://gateway-challenge.surge.sh/assets/logo.svg" alt="gateway logo" />
          <p>All Categories</p>
        </a>

        <input type="text" placeholder="Search a product or a category ..." aria-label="search for product or category" />

        <ul>
          <li><a href="https://gateway-challenge.surge.sh/!#">Favourites</a></li>
          <li><a href="https://gateway-challenge.surge.sh/!#">Account</a></li>
          <li>
            Cart
            <button type="button">1</button>
          </li>
        </ul>
      </header>

      <main>
        <form action="#">
          <section>
            <h1>Your information</h1>

            <article>
              <fieldset>
                <label for="fullName">Full name <span>*</span></label>
                <input type="hidden" placeholder="full name" id="amount" required value="1500" />
                <input type="text" placeholder="full name" id="name" required />
              </fieldset>
              <fieldset>
                <label for="email">Email <span>*</span></label>
                <input type="email" placeholder="email" id="email" required />
              </fieldset>
            </article>

            <article aria-label="payment methods" class="paymentMethods">
              <h2>Payment Method</h2>
              <button type="button">
                <img src="https://gateway-challenge.surge.sh/assets/squad.svg" alt="squad logo" />
              </button>
            </article>
          </section>

          <section aria-label class="cart">
            <h2>Order Summary</h2>

            <ul>
              <li>
                <img src="https://gateway-challenge.surge.sh/assets/babe.svg" alt="cart item" />
                <div>
                  <h3>Women’s Turtle Neck</h3>
                  <p>N500</p>

                  <div>
                    <p>Size: S</p>
                    <p>Qty: 1</p>
                    <p>color: <span></span></p>
                  </div>
                </div>
              </li>

              <li>
                <img src="https://gateway-challenge.surge.sh/assets/babe.svg" alt="cart item" />
                <div>
                  <h3>Women’s Turtle Neck</h3>
                  <p>N500</p>

                  <div>
                    <p>Size: S</p>
                    <p>Qty: 1</p>
                    <p>color</p>
                  </div>
                </div>
              </li>
            </ul>

            <article>
              <div class="groupies">
                <p>Sub-total</p>
                <p>N1,000</p>
              </div>
              <div class="groupies">
                <p>Total</p>
                <p>N1,500</p>
              </div>
            </article>

            <button type="button" onclick="squadPay()" class="submit-button">Checkout</button>
          </section>
        </form>
      </main>
    </div>
    <script src="https://checkout.squadinc.co/widget/squad.min.js"></script>
    <script>
        function squadPay(){
            const squadInstance = new squad({
              onClose: () => console.log('Widget closed'),
              onLoad: () => console.log('Widget loaded successfully'),
              onSuccess: () => console.log(`Linked successfully`),
              key: 'test_pk_sample-public-key-1',
              email: document.getElementById("email").value,
              name: document.getElementById("name").value,
              amount: (parseInt(document.getElementById("amount").value) * 100),
              currency: "NGN"
            });
            squadInstance.setup();
            squadInstance.open();
        }
    </script>
  </body>

<!-- Mirrored from gateway-challenge.surge.sh/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 15:17:12 GMT -->
</html>
