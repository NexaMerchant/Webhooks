<x-admin::layouts>

    {{-- Page Title --}}
    <x-slot:title>
        @lang('Webhooks::app.Admin.Settings.title')
    </x-slot:title>

    {{-- Page Content --}}
    <x-slot:content>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">@lang('Webhooks::app.Admin.Settings.title')</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.settings.webhooks.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="webhook_url">@lang('Webhooks::app.Admin.Settings.webhook_url')</label>
                                <input type="text" name="webhook_url" id="webhook_url" class="form-control" value="{{ setting('webhook_url') }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:content>

</x-admin::layouts>