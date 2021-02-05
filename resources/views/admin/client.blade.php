@extends('layouts.admin')

@section('content')
<a href="createar" class="btn btn-primary">create archive</a>
<a href="contact" class="btn btn-danger">contact us</a><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <table class="table" style="border-collapse:collapse;width:100%;max-width:7000px;min-width:400px;text-align:center;">
                 
                 <tr style="border: 1px solid gray ;background-color:#F7DC6F"  >
                                      <th style="border: 1px solid gray;border-color:#F39C12 ">Id</th>
                                      <th style="border: 1px solid gray;border-color:#F39C12"> Nom </th>
                                      <th style="border: 1px solid gray;border-color:#F39C12"> Prenom </th>
                                      <th style="border: 1px solid gray;border-color:#F39C12"> email </th>
                                      <th style="border: 1px solid gray;border-color:#F39C12"> Tel </th>
                                      <th style="border: 1px solid gray;border-color:#F39C12"> Adresse </th>
                                      <th style="border: 1px solid gray;border-color:#F39C12"> ACtion</th>
                 </tr>
                              
    @foreach($client as $c)
    <tr style="border: 1px solid gray;border-color:#F39C12;">
                   <td style="border: 1px solid gray;border-color:#F39C12; background-color:#F5F5F5">{{$c->id}}</td>
                   <td style="border: 1px solid gray;border-color:#F39C12;background-color:#F5F5F5">{{$c->nom_personnel}}</td>
                   <td style="border: 1px solid gray;border-color:#F39C12;background-color:#F5F5F5">{{$c->prenom_personnel}}</td>
                   <td style="border: 1px solid gray;border-color:#F39C12; background-color:#F5F5F5">{{$c->email}}</td>
                   <td style="border: 1px solid gray;border-color:#F39C12;background-color:#F5F5F5">{{$c->tel}}</td>
                   <td style="border: 1px solid gray;border-color:#F39C12;background-color:#F5F5F5">{{$c->adresse_personnel}}</td>
                   <td style="border: 1px solid gray;border-color:#F39C12;background-color:#F5F5F5">
                   <form action="" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}

                   <a href="{{url('showp/'.$c->id)}}"class="btn btn-outline-primary">show</a>
                   <a href="" class="btn btn-default">edit</a>
                   <button type="submit"class="btn btn-danger">supprimer</button></td>
                   </form>
               </tr>
    @endforeach



 
  </tbody>
</table>

</div></div></div>

@endsection