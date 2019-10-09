<html>
  
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="datepicker/datepicker3.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
        <title>Report</title>
    </head>


<body>.
    <div class="container-fluid">
        <div class="card">
                <div class="card-header bg-dark text-white">
                    Report
                </div>
            <div class="card-body " style="width:800px">
               


                <form style="" action="/Report/export_excel" >
               
                    <div class="form-group row" >

                        <label class="col-sm-2 col-form-label" for="">Start Date</label>
                            <div class="form-group ">
                            
                                    <input id="datepicker" name="startdate" style="width:350px"
                                    value= <?php $tgl=date('d-m-Y');
                                             echo $tgl;?>> 
                                        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                                        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
                                        <script>
                                            $('#datepicker').datepicker({
                                                uiLibrary: 'bootstrap4'
                                            });
                                        </script>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="">End Date</label>
                        <div class="form-group ">
                                <input id="datepicker1"  style="width:350px" name="enddate" value= <?php $tgl=date('d-m-Y');
                                             echo $tgl;?>> 
                                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                                    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
                                    <script>
                                        $('#datepicker1').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                    </script>
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Report Type</label>
                        <div class="form-group ">
                            <select id="inputState" class="custom-select" style="width:385px">
                                <option selected > -- Masukkan User_Id -- </option>
                                
                                <option> Store_Keeper </option>
                                <option> Quality_Checker </option>
                                <option> Packager </option>
                                <option> Kurir </option>
                              
                            </select>
                        </div>
                    </div> 

                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Report Type</label>
                        <div class="form-group ">
                            <select id="inputState" class="custom-select" style="width:385px">
                                <option selected > -- Please Choose Report Type -- </option>
                                <option>Completed Orders</option>
                                <option>Missing Orders</option>
                                <option>Not Completed Orders</option>
                            </select>
                        </div>
                    </div>               
                    
                   
                        <div class=" " >
                          <!--  <button type="submit" class="btn btn-primary col-sm-1">Cek</button>
                            <button type="submit" class="btn btn-primary ">Generate</button>-->
                            <a href="/Report/export_excel" class="btn btn-success my-3" target="_blank">Generate</a>

                        </div>
                       


                </form>
               
            </div>
        </div>
        
       <!-- <table class="table table-sm">
         
                <tr>
                <th scope="col">No.</th>
                <th scope="col">User ID</th>
                <th scope="col">Store_keeper_id</th>
                <th scope="col">status</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                </tr>
                @foreach ( $users as $usr )
                <tr>
                <th scope="row">{{ $loop -> iteration}}</th>
                <td>{{ $usr -> admin_id }}</td>
                <td>{{ $usr -> store_keeper_id }}</td>
                <td>{{ $usr -> status }}</td>
                <td>{{ $usr -> created_at }}</td>
                <td>{{ $usr -> updated_at }}</td>
                </tr>
                
                @endforeach
        </table>-->
                        
                        
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </div>    
</body>
</html>




