<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>PoliLingua</title>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
    $(function(){
		$('#categories').change(function(){
			var option = $('#categories option:selected').val();	
			$('#update').attr('placeholder', option);
		});  
    });
    $(function(){
        $('#categories1').change(function(){
			var option = $('#categories1 option:selected').val();	
			$('#update1').attr('placeholder', option);
		}); 
    });
        
    $(function(){
        $('#categories2').change(function(){
			var option = $('#categories2 option:selected').val();	
			$('#update2').attr('placeholder', option);
		});   
	});
    </script>
    <script>
          //open forms
        function create(){
            document.getElementById('f_u').style.display = "none";           
            document.getElementById('f_d').style.display = "none";
            document.getElementById('f_dd').style.display = "none";
            document.getElementById('f_ss').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "none";
            document.getElementById('f_ddd').style.display = "none";
            document.getElementById('f_uu').style.display = "none";
            document.getElementById('f_c').style.display = "block";
        }
        function update(){       
            document.getElementById('f_d').style.display = "none";
            document.getElementById('f_dd').style.display = "none";
            document.getElementById('f_c').style.display = "none";
            document.getElementById('f_ss').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "none";
            document.getElementById('f_ddd').style.display = "none";
            document.getElementById('f_uu').style.display = "none";
            document.getElementById('f_u').style.display = "block";
        }
        function deletee(){
            document.getElementById('f_u').style.display = "none";           
            document.getElementById('f_dd').style.display = "none";
            document.getElementById('f_c').style.display = "none";
            document.getElementById('f_ss').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "none";
            document.getElementById('f_ddd').style.display = "none";
            document.getElementById('f_uu').style.display = "none";
            document.getElementById('f_d').style.display = "block";
        }
        function addSub(){
            document.getElementById('f_u').style.display = "none";           
            document.getElementById('f_d').style.display = "none";
            document.getElementById('f_dd').style.display = "none";
            document.getElementById('f_c').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "none";
            document.getElementById('f_ddd').style.display = "none";
            document.getElementById('f_uu').style.display = "none";
            document.getElementById('f_ss').style.display = "block";
    }
    function addSSub(){
        document.getElementById('f_u').style.display = "none";           
            document.getElementById('f_d').style.display = "none";
            document.getElementById('f_dd').style.display = "none";
            document.getElementById('f_c').style.display = "none";
            document.getElementById('f_ss').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "none";
            document.getElementById('f_ddd').style.display = "none";
            document.getElementById('f_uu').style.display = "none";
            document.getElementById('f_sss').style.display = "block";
    }
    function upSub(){
        document.getElementById('f_u').style.display = "none";           
            document.getElementById('f_d').style.display = "none";
            document.getElementById('f_dd').style.display = "none";
            document.getElementById('f_c').style.display = "none";
            document.getElementById('f_ss').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "none";
            document.getElementById('f_ddd').style.display = "none";
            document.getElementById('f_uu').style.display = "block";
    }
    function upSSub(){
        document.getElementById('f_u').style.display = "none";
            document.getElementById('f_uu').style.display = "none";
            document.getElementById('f_d').style.display = "none";
            document.getElementById('f_dd').style.display = "none";
            document.getElementById('f_c').style.display = "none";
            document.getElementById('f_ss').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "block";
            document.getElementById('f_ddd').style.display = "none";
    }
    function delSub(){
        document.getElementById('f_u').style.display = "none";
            document.getElementById('f_uu').style.display = "none";
            document.getElementById('f_d').style.display = "none";
            document.getElementById('f_ddd').style.display = "none";
            document.getElementById('f_c').style.display = "none";
            document.getElementById('f_ss').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "none";
            document.getElementById('f_dd').style.display = "block";
    }
    function delSsub(){
            document.getElementById('f_u').style.display = "none";
            document.getElementById('f_uu').style.display = "none";
            document.getElementById('f_d').style.display = "none";
            document.getElementById('f_dd').style.display = "none";
            document.getElementById('f_c').style.display = "none";
            document.getElementById('f_ss').style.display = "none";
            document.getElementById('f_sss').style.display = "none";
            document.getElementById('f_uuu').style.display = "none";
            document.getElementById('f_ddd').style.display = "block";
    }

    </script>
  <section class="section-content bg border-top">
    <div class="container my-4"> 
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 
    @if($message=Session::get('success_message'))
        <div class="alert mx-auto">
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
        </div>
        @endif   
    <div class="row">   
    <div class="card col-xl-8">
        <article class="card-body">
            <div class="float-right">
            <button  onclick="create()" class="btn btn-outline-primary">C</button>
            <button  class="btn btn-outline-primary">R</button>
            <button onclick="update()" class="btn btn-outline-primary">U</button>
            <button onclick="deletee()" class="btn btn-outline-primary">D</button>
            </div>
        <h4 class="card-title mb-4 mt-1">CRUD</h4>
            <form id="f_c" method="POST" action="{{route('store')}}" style="display:none;">
                @csrf
            <div class="form-group">
                <label>Categorie</label>
                <input name="name" class="form-control" type="text">
                <small id="add_sub" onclick="addSub()"> <b>Adauga subcategorie</b></small>
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Adauga  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        <form id="f_ss" method="POST" action="{{route('store.sub')}}" style="display:none;">
                @csrf
            <div class="form-group">              
                <label>Categorie</label>
                <select name="name" class="form-control" type="text">
                @if($data->count())
                    @foreach($data as $category)
                        <option>{{$category->name}}</option> 
                    @endforeach  
                @endif
                </select>
                <small id="add_ssub" onclick="addSSub()"> <b>Adauga subcategorie</b></small>
            </div> <!-- form-group// -->
            <div class="form-group"> 
                <label>Subcategorie</label>
                <input name="subCat" class="form-control" type="text">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Adauga  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        <form id="f_sss" method="POST" action="{{route('store.ssub')}}" style="display:none;">
                @csrf
            <div class="form-group">              
                <label>Categorie</label>
                <select name="name" class="form-control" type="text">
                @if($data1->count())
                    @foreach($data1 as $category)
                        <option>{{$category->name}}</option> 
                    @endforeach  
                @endif
                </select>
            </div> <!-- form-group// -->
            <div class="form-group"> 
                <label>Subcategorie</label>
                <input name="subCat" class="form-control" type="text">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Adauga  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        <form id="f_u" method="POST" action="{{route('update')}}" style="display:none;">
                @csrf
            <div class="form-group">
                <label>Categorie</label>
                <select id="categories" name="name" class="form-control" type="text">
                @if($data->count())
                    @foreach($data as $category)
                        <option>{{$category->name}}</option> 
                    @endforeach  
                @endif
                </select>
                <small id="up_sub" onclick="upSub()"> <b>Modifica subcategorie</b></small>
            </div> <!-- form-group// -->
            <div class="form-group">
                <label>Actualizeaza</label>
                    <input id="update" name="newCat" class="form-control" placeholder="" type="text">
                </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Modifica  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        <form id="f_uu" method="POST" action="{{route('update.sub')}}" style="display:none;">
                @csrf
            <div class="form-group">
                <label>Categorie</label>
                <select id="categories1" name="name" class="form-control" type="text">
                @if($data1->count())
                    @foreach($data1 as $category)
                        <option>{{$category->name}}</option> 
                    @endforeach  
                @endif
                </select>
            <small id="up_ssub" onclick="upSSub()"> <b>Modifica subcategorie</b></small>
            </div> <!-- form-group// -->
            <div class="form-group">
                <label>Actualizeaza</label>
                    <input id="update1" name="newCat" class="form-control" placeholder="" type="text">
                </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Modifica  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        <form id="f_uuu" method="POST" action="{{route('update.ssub')}}" style="display:none;">
                @csrf
            <div class="form-group">
                <label>Categorie</label>
                <select id="categories2" name="name" class="form-control" type="text">
                @if($data2->count())
                    @foreach($data2 as $category)
                        <option>{{$category->name}}</option> 
                    @endforeach  
                @endif
                </select>
            </div> <!-- form-group// -->
            <div class="form-group">
                <label>Actualizeaza</label>
                    <input id="update2" name="newCat" class="form-control" placeholder="" type="text">
                </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Modifica  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        <form id="f_d" method="POST" action="{{route('destroy')}}" style="display:none;">
                @csrf
            <div class="form-group">
                <label>Categorie</label>
                <select name="name" class="form-control" type="text">
                @if($data->count())
                    @foreach($data as $category)
                        <option>{{$category->name}}</option> 
                    @endforeach  
                @endif
                </select>
                <small id="del_sub" onclick="delSub()"> <b>Sterge subcategorie</b></small>
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Sterge  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        <form id="f_dd" method="POST" action="{{route('destroy.sub')}}" style="display:none;">
                @csrf
            <div class="form-group">
                <label>Categorie</label>
                <select name="name" class="form-control" type="text">
                @if($data1->count())
                    @foreach($data1 as $category)
                        <option>{{$category->name}}</option> 
                    @endforeach  
                @endif
                </select>
                <small id="del_ssub" onclick="delSsub()"> <b>Sterge subcategorie</b></small>
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Sterge  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        <form id="f_ddd" method="POST" action="{{route('destroy.ssub')}}" style="display:none;">
                @csrf
            <div class="form-group">
                <label>Categorie</label>
                <select name="name" class="form-control" type="text">
                @if($data2->count())
                    @foreach($data2 as $category)
                        <option>{{$category->name}}</option> 
                    @endforeach  
                @endif
                </select>               
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Sterge  </button>
            </div> <!-- form-group// -->                                                           
        </form>
        </article>
    </div> <!-- card.// -->
    @if($data->count())
        <aside class="float-right m-4" > 
           <ul>
           @foreach($data as $category)
            <li>{{$category->name}}
            @foreach($data1 as $subcat)
                @if($subcat->category_id ==$category->id) 
                    <ul>                      
                        <li>{{$subcat->name}}
                        <ul>
                        @foreach($data2 as $ssubcat)                      
                            @if($ssubcat->subcategory_id == $subcat->id)
                            
                                <li>{{$ssubcat->name}}</li>                               
                            
                            @endif
                        @endforeach  
                        </ul>                      
                        </li>
                    </ul>
                @endif         
            </li>
            @endforeach 
            @endforeach
           </ul>
        </aside>
        @endif
    </div>  
    </div> <!-- container .//  -->
  </section> 
    
  </body>
</html>