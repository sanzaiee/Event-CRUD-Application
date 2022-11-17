@inject('searchType', 'App\Helpers\SiteHelper')

<form action="{{ url()->current() }}" method="get">
    <div class="row align-items-center">
        <div class="col-md-4">
                <label for="filter_by">{{ __('Select Events Filter By') }}</label>
                <select name="filter_by" id="filter_by" class="form-control">
                    <option value="" class="form-control"> -- Choose Events Filter By --</option>
                    @foreach ($searchType->searchType() as $index => $item)
                    <option value="{{ $index }}" class="form-control" @if(request()->filter_by == $index) selected @endif>{{ $item }}</option>
                    @endforeach
                </select>
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-info">Search</button>
            <a href="{{ route(Request::route()->getName()) }}" class="btn btn-primary">Refresh</a>
        </div>
    </div>
</form>
