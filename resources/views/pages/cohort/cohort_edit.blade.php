@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort View
@endsection

@section('content')
<section>
    <header>
        <h1>Cohort View</h1>
    </header>
    <div class="ns-music-v1">
        <table class="c-table  c-table--content">
        <caption>
            The caption is an accessible description of what the table shows.
        </caption>
        <fieldset id="cohort-select">
            <select id="Field101" name="Field101" class="field select medium" tabindex="5">
                <option value="First Choice">Started Sem 1 '19</option>
                <option value="Second Choice">Started Sem 2 '19</option>
                <option value="Third Choice">Started Sem 1 '20</option>
                <option value="Fourth Choice">Started Sem 2 '20</option>
                <option value="Fifth Choice">Started Sem 1 '21</option>
                <option value="Fifth Choice">Started Sem 2 '21</option>
            </select>
        <thead>
            <tr class="c-header-row">
            <th scope="col">Name</th>
            <th scope="col">Paper</th>
            <th scope="col">GitHub Username</th>
            </tr>
        </thead>
        <tbody>
            <tr class="c-row">
            <th scope="row">Conor West</th>
            <td>Studio 3</td>
            <td>westcl4</td>
            </tr>
            <tr class="c-row">
            <th scope="row">Anthony Legg</th>
            <td>Studio 3</td>
            <td>leggant</td>
            </tr>
            <tr class="c-row">
            <th scope="row">Mohammed Alhasan</th>
            <td>Studio 3</td>
            <td>Mohammed-alhasan</td>
            </tr>
        </tbody>
        </table>
    </div>
@endsection