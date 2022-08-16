@extends('backend.layouts.app')

@section('title')
    {{ __($module_title) }}
@endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ __($module_title) }}
        </x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <x-backend.section-header>
                <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small class="text-muted">"add"</small>

                <x-slot name="subtitle">
                    @lang(':module_name Management Dashboard', ['module_name' => Str::title($module_name)])
                </x-slot>
                <x-slot name="toolbar">
                    @can('add_' . $module_name)
                        <x-buttons.create route='{{ route("backend.$module_name.add") }}'
                            title="{{ __('Create') }} {{ ucwords(Str::singular($module_name)) }}" />
                    @endcan

                    {{-- @can('restore_' . $module_name)
                        <div class="btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-cog"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href='{{ route("backend.$module_name.trashed") }}'>
                                        <i class="fas fa-eye-slash"></i> View trash
                                    </a>
                                </li>
                                <!-- <li>
                                                                                                                                                                                                                                                                                                                                                                                                                    <hr class="dropdown-divider">
                                                                                                                                                                                                                                                                                                                                                                                                                </li> -->
                            </ul>
                        </div>
                    @endcan --}}
                </x-slot>
            </x-backend.section-header>

            <div class="row mt-4">
                <form id="pred-form" class="col-12">
                    
               
                    <table id="example" class="table table-responsive display" style="width:100%" data-paging="false" data-searching="false"
                        data-ordering="false" >

                        <thead>
                            <tr class="text-nowrap">
                                <th style="width : 200px;">League</th>
                                <th>Team A</th>
                                <th>Team B</th>
                                <th>Category</th>
                                <th>Tips</th>
                                <th>Odds</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody id="addPredBody">
                           

                        </tbody>
                    </table>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-7">
                                <div class="float-left">
                                    <button type="submit" class="btn btn-success text-white" id="pred-submit" type="submit">Save predictions</button>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="float-end">
                                    <button type="button" class="btn btn-primary" id="add-new-row">+ Add New Row</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        
    </div>
@endsection



@push('after-styles')
    <!-- DataTables Core and Extensions -->
    <style>
        .dataTables_scroll{
                overflow:auto;
                position: relative;
            }
    </style>
    <link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('after-scripts')
    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.serializeJSON/3.2.1/jquery.serializejson.min.js"
        integrity="sha512-SdWDXwOhhVS/wWMRlwz3wZu3O5e4lm2/vKK3oD0E5slvGFg/swCYyZmts7+6si8WeJYIUsTrT3KZWWCknSopjg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      
    

    <script>
        

        $(document).ready(function() {
            var additional = 10
          
            var table = $('#example').DataTable({
              "scrollX": true,
            //   "autoWidth": true,
            //   "fixedHeader":true,
              "sScrollXInner": "100%",
              
            })

            table.columns.adjust().draw();

            $('#pred-form').submit(async function(event) {
                event.preventDefault();
                var data = table.$('input, select').serializeJSON();
                sendPred(data);
                
            });

            var rows = [];


            for (i = 0; i < additional; i++) {
                rows.push([
                    `<select required class=" js-example-basic-single " 
            name="prediction[${i}][league]">
            @foreach ($leagues as $league)
                <option class="elipsis" value="{{ $league->id }}">{{ $league->name }}
                </option>
            @endforeach
        </select>`,
        `<input required style="width: 200px" class="form-control" type="text" id="row-1-team-a"
            name="prediction[${i}][team_a]">`,
             `<input required style="width: 200px" class="form-control" type="text" id="row-1-team-a"
            name="prediction[${i}][team_b]">`,
             `<select  required  class="form-control " 
            name="prediction[${i}][cat]" id="pred-cat">
            @foreach ($categories as $category)
                <option  value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>`, 
        `<input  required style="width:80px;" class="form-control" type="text" id="row-1-age"
            name="prediction[${i}][tips]" >`,
             `<input  required style="width:80px;" type="number" step="0.01" class="form-control"
            name="prediction[${i}][odds]" id="row-1-odds" />`,
            `<input required class="form-control" type="date" id="row-1-date" name="prediction[${i}][date]">`,
            `<input  required class="form-control" type="time" id="row-1-time" name="prediction[${i}][time]">`  ])
            }


           
            table.rows.add(rows).draw(false);

      
            $('.js-example-basic-single').select2({
                    dropdownAutoWidth: true,
            })  

            $('#pred-cat').select2({
                    dropdownAutoWidth: true,
            })  


         
          

           

            


  



            $('#add-new-row').on('click', function () {
            table.row.add([
            `<select required class=" js-example-basic-single " 
            name="prediction[${additional}][league]">
            @foreach ($leagues as $league)
                <option class="elipsis" value="{{ $league->id }}">{{ $league->name }}
                </option>
            @endforeach
          </select>`,`<input required style="width: 200px" class="form-control" type="text" id="row-1-team-a"
            name="prediction[${additional}][team_a]">`, 
            `<input required style="width: 200px" class="form-control" type="text" id="row-1-team-a"
            name="prediction[${additional}][team_b]">`, 
            `<select required class="form-control "
            name="prediction[${additional}][cat]" id="pred-cat">
            @foreach ($categories as $category)
                <option  value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

             </select>`, `<input required style="width:80px;" class="form-control" type="text" id="row-1-age"
            name="prediction[${additional}][tips]" >`, `<input required style="width:80px;" type="number" step="0.01" class="form-control"
            name="prediction[${additional}][odds]" id="row-1-odds" />`,`<input required class="form-control" type="date" id="row-1-date" name="prediction[${additional}][date]">`,`<input required class="form-control" type="time" id="row-1-time" name="prediction[${additional}][time]">`  ]).draw(false);
 
            additional++;
    });


        });
    </script>

    <script>
        const sendPred = async (result) => {
            var data = Object.values(result);

            const body = Object.values(data[0]);

            axios.post('/api/predictions/bulk', body)
                .then(function(response) {
                    console.log(response);
                    if (response.data.status == "success") {
                        alert("Predictions Added Successfully");
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    </script>
@endpush
