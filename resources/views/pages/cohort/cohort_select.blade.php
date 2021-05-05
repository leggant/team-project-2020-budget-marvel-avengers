@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort View
@endsection

@section('content')
<section>
    <header>
        <h1>Cohort View</h1>
    </header>
    {{-- Cheers to Emma Hossenlopp at Codepen.io for the basic table structure https://codepen.io/ehossenlopp/pen/gNPwpr --}}
    <div class="ns-music-v1">
        <table class="c-table  c-table--content">
        <caption>
            The caption is an accessible description of what the table shows.
        </caption>
        <thead>
            <tr class="c-header-row">
            <th scope="col">Name</th>
            <th scope="col">Number</th>
            <th scope="col">Notes</th>
            </tr>
        </thead>
        <tbody>
            <tr class="c-row">
            <th scope="row">Adelaide</th>
            <td>4507</td>
            <td>Notes</td>
            </tr>
            <tr class="c-row">
            <th scope="row">Bucharest</th>
            <td>3</td>
            <td>Notes</td>
            </tr>
            <tr class="c-row">
            <th scope="row">Catalina</th>
            <td>56232</td>
            <td>Notes</td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="c-footer-row">
            <td></td>
            <td>60742 total</td>
            <td></td>
            </tr>
        </tfoot>
        </table>
    </div>
@endsection