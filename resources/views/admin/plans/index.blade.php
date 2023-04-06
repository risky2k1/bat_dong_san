@extends('admin.layout.master')

@section('content')
    <table class="table table-nowrap table-hover table-responsive table-centered mb-0">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">tag</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">is_active</th>
            <th scope="col">price</th>
            <th scope="col">signup_fee</th>
            <th scope="col">currency</th>
            <th scope="col">trial_period</th>
            <th scope="col">trial_interval</th>
            <th scope="col">trial_mode</th>
            <th scope="col">grace_period</th>
            <th scope="col">grace_interval</th>
            <th scope="col">invoice_period</th>
            <th scope="col">invoice_interval</th>
            <th scope="col">tier</th>
        </tr>
        </thead>
        <tbody>
        @foreach($plans as $plan)
            <tr>
                <th scope="row" >
                    {{$plan->id}}
                </th>
                <td>
                    {{$plan->tag}}
                </td>
                <td class="col-2">
                    {{$plan->name}}
                </td>
                <td class="col-2">
                    {{$plan->description}}
                </td>
                <td>
                    {{$plan->is_active}}
                </td>
                <td>
                    {{$plan->price}}
                </td>
                <td>
                    {{$plan->signup_fee}}
                </td>
                <td>
                    {{$plan->currency}}
                </td>
                <td>
                    {{$plan->trial_period}}
                </td>
                <td>
                    {{$plan->trial_interval}}
                </td>
                <td>
                    {{$plan->trial_mode}}
                </td>
                <td>
                    {{$plan->grace_period}}
                </td>
                <td>
                    {{$plan->grace_interval}}
                </td>
                <td>
                    {{$plan->invoice_period}}
                </td>
                <td>
                    {{$plan->invoice_interval}}
                </td>
                <td>
                    {{$plan->tier}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
