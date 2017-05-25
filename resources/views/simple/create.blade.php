@extends('layouts.app')

@section('content')
    <div id="invoice">
        <div class="panel panel-default" v-clock>
            <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title">Create Invoice</span>
                    <a href="{{ route('invoices.index') }}" class="btn btn-default pull-right">Back</a>
                </div>
            </div>
            <div class="panel-body">
                @include('invoices.form')
            </div>
            <div class="panel-footer">
                <a href="{{ route('invoices.index') }}" class="btn btn-default">CANCEL</a>
                <button class="btn btn-success" @click="create" :disabled="isProcessing">CREATE</button>
            </div>
        </div>
    </div>
@stop


@push('scripts')
<script src="https://cdn.jsdelivr.net/vue/1.0.26/vue.js"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>
<script>
    Vue.http.headers.common['X-CSRF-TOKEN'] = '{{csrf_token()}}';
    window._form = {
        invoice_no : '',
        client: '',
        client_address: '',
        title: '',
        invoice_date: '',
        due_date: '',
        discount: 0,
        products: [{
            name: '',
            price: 0,
            qty: 1
        }]
    };
</script>
<script src="/assets/js/app.js"></script>
@endpush