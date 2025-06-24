<style>
    #card_type.valid {
        color: green;
        font-weight: 500;
    }

    #card_type.invalid {
        color: red;
        font-weight: 500;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <form action="{{route('Payment.update',$payment->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Payment Information</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group local-forms">
                                <label>Card Holder Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="card_name" value="{{ $payment->card_name }}" placeholder="Enter Card Holder Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group local-forms">
                                <label>Card Number <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="card_number" id="card_number" value="{{ $payment->card_number }}" placeholder="Enter Card Number">
                                <small id="card_type" class="form-text mt-1"></small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group local-forms">
                                <label>Expire Date <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker" type="date" name="expire_date" value="{{ $payment->expire_date }}" placeholder="DD-MM-YYYY">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group local-forms">
                                <label>CCV <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="ccv" value="{{ $payment->ccv }}" placeholder="Enter CCV">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cardInput = document.getElementById('card_number');
        const cardTypeDisplay = document.getElementById('card_type');

        cardInput.addEventListener('input', function() {
            const number = cardInput.value.replace(/\D/g, '');
            let cardType = '';
            let className = '';

            if (/^4\d{0,}$/.test(number)) {
                cardType = 'Visa';
                className = 'valid';
            } else if (/^5[1-5]\d{0,}$/.test(number) || /^2(2[2-9]|[3-6]|7[01]|720)\d{0,}$/.test(number)) {
                cardType = 'MasterCard';
                className = 'valid';
            } else if (number.length >= 6) {
                cardType = 'Invalid or Unknown Card';
                className = 'invalid';
            } else {
                cardType = '';
                className = '';
            }

            cardTypeDisplay.textContent = cardType ? `Card Type: ${cardType}` : '';
            cardTypeDisplay.className = `form-text mt-1 ${className}`;
        });
    });
</script>