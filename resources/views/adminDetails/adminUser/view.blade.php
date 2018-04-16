
@include('layouts/header');
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<div id="page-wrapper">
            <table class="table table-responsive table-hover table-condensed" id="table" cellpadding="5px">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Country</th>
            <th class="text-center">Salary ($)</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Deepak</td>
            <td>Singh</td>
            <td>pradeep.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>kamal</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Sanjay</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sandeep</td>
            <td>Kumar</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Kuldeep</td>
            <td>Rawat</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>7</td>
            <td>Poonam</td>
            <td>rani</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>Female</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>Rani</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>Female</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>9</td>
            <td>Krishan</td>
            <td>Kumare</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>Female</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>sandeep@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>11</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>2000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>12</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>15000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>13</td>
            <td>Satyam</td>
            <td>kumar</td>
            <td>satyam@gmail.com</td>
            <td>male</td>
            <td>uk</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>14</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>usa</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>

    </tbody>
</table>
</div>


@stop
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
 

    

