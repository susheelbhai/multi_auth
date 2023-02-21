@props(['heading', 'search', 'para', 'addUrl'])


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title table_heading">{{ $heading }}</h4>
                
                @if(isset($para)) {{ $para }} @endif
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <tbody>
                        @foreach ($details as $key => $i)
                            <tr class="bg-light">
                                <td colspan="2"> {{ $i['name'] }} </td>
                            </tr>
                                    @if (isset($i['form']))
                                    @foreach ($i['form'] as $j)
                                    <tr>
                                        <td> {{ $j['name'] }} </td>
                                        <td> {{ $j['value'] }} </td>
                                    </tr>
                                    
                                    @endforeach
                                    @endif
                                   
                        @endforeach
                        @if(isset($footer)) {{ $footer }} @endif
    
                    </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>