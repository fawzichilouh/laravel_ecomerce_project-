

<?php $__env->startSection('extra-script'); ?>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default">
              <div class="panel-body">

                  <?php if(Session::has('success')): ?>
                  <div class="alert alert-primary text-center">
                      <p><?php echo e(Session::get('success')); ?></p>
                  </div>
                  <?php endif; ?>

                  <form role="form" action="<?php echo e(route('make-payment')); ?>" method="post" class="stripe-payment"
                      data-cc-on-file="false" data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>"
                      id="stripe-payment">
                      <?php echo csrf_field(); ?>

                      <div class='form-row row'>
                          <div class='col-xs-12 form-group required'>
                              <label class='control-label'>Name on Card</label> <input class='form-control'
                                  size='4' type='text'>
                          </div>
                      </div>

                      <div class='form-row row'>
                          <div class='col-xs-12 form-group card required'>
                              <label class='control-label'>Card Number</label> <input autocomplete='off'
                                  class='form-control card-num' size='20' type='text'>
                          </div>
                      </div>

                      <div class='form-row row'>
                          <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='control-label'>CVC</label>
                              <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 595'
                                  size='4' type='text'>
                          </div>
                          <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Month</label> <input
                                  class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                          </div>
                          <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Year</label> <input
                                  class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                          </div>
                      </div>

                      <div class='form-row row'>
                          <div class='col-md-12 hide error form-group'>
                              <div class='alert-danger alert'>Fix the errors before you begin.</div>
                          </div>
                      </div>

                      <div class="row">
                          <button class="btn btn-success btn-lg btn-block" type="submit">Pay (<?php echo e(getPrice(Cart::total())); ?>)</button>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('extra-js'); ?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function () {
        var $form = $(".stripe-payment");
        $('form.stripe-payment').bind('submit', function (e) {
            var $form = $(".stripe-payment"),
                inputVal = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid = true;
            $errorStatus.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorStatus.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-num').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeRes);
            }

        });

        function stripeRes(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });

</script>


<?php $__env->stopSection(); ?>






   





<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/stripetest.blade.php ENDPATH**/ ?>