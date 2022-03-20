<x-home-master>
 
    @section('content')
        <style>
            tr:nth-child(odd) {
                background-color: #e3e6ec;
                
            }
            tr{
                font-size: 16px;
                padding: 10px
            }
        </style>
        <div class="card container mb-5">
            <div class="card-header"><h1>Janar</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($janar as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card container mb-5">
            <div class="card-header"><h1>Shkurt</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($shkurt as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card container mb-5">
            <div class="card-header"><h1>Mars</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($mars as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="card container mb-5">
            <div class="card-header"><h1>Prill</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($prill as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="card container mb-5">
            <div class="card-header"><h1>Maj</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($maj as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <div class="card container mb-5">
            <div class="card-header"><h1>Qeshor</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($qeshor as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <div class="card container mb-5">
            <div class="card-header"><h1>Korrik</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($korrik as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <div class="card container mb-5">
            <div class="card-header"><h1>Gusht</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($gusht as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <div class="card container mb-5">
            <div class="card-header"><h1>Shtator</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($shtator as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <div class="card container mb-5">
            <div class="card-header"><h1>Tetor</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($tetor as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <div class="card container mb-5">
            <div class="card-header"><h1>Nentor</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($nentor as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>





        <div class="card container">
            <div class="card-header"><h1>Dhjetor</h1></div>
            <div class="card-body">
                <div class="datatable" style="overflow-x:auto;">

                    <table class="table table-bordered table-hover overflow-auto" style="overflow: auto;" id="dataTable"
                        width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dita</th>
                                <th>Imsaku</th>
                                <th>Lindja</th>
                                <th>Dreka</th>
                                <th>Ikindia</th>
                                <th>Akshami</th>
                                <th>Jacia</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dhjetor as $time)
                                <tr>
                                    <td><b> {{ $time->day }}</b></td>
                                    <td> {{ date('H:i',strtotime($time->imsak)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->sunrise)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->dhuhr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->asr)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->maghrib)) }}</td>
                                    <td> {{ date('H:i',strtotime($time->isha)) }}</td>
                                   

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    @endsection

</x-home-master>
