@extends('layouts.master')
@section('title', 'calculator')
@section('content')

    <section class="calculator section" id="calculator">
        <h2 class="section__title">Calculator</h2>
        <span class="section__subtitle"></span>
        <div class="cal__container container">
            <div class="cal">
                <div class="display-screen">
                    <div id="sub-display"></div>
                    <div id="display"></div>
                </div>
                <div class="buttons">
                    <table>
                        <tr>
                            <td><button class="btn-operator" id="clear">C/CE</button></td>
                            <td><button class="btn-operator" id="backspace">Del</button></td>
                            <td><button class="btn-operator" id="**">x<sup>y</sup></button></td>
                            <td><button class="btn-operator" id="%">%</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn-number" id="7">7</button></td>
                            <td><button class="btn-number" id="8">8</button></td>
                            <td><button class="btn-number" id="9">9</button></td>
                            <td><button class="btn-operator" id="/">&divide;</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn-number" id="4">4</button></td>
                            <td><button class="btn-number" id="5">5</button></td>
                            <td><button class="btn-number" id="6">6</button></td>
                            <td><button class="btn-operator" id="*">&times;</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn-number" id="1">1</button></td>
                            <td><button class="btn-number" id="2">2</button></td>
                            <td><button class="btn-number" id="3">3</button></td>
                            <td><button class="btn-operator" id="-">-</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn-number" id=".">.</button></td>
                            <td><button class="btn-number" id="0">0</button></td>
                            <td><button class="btn-equal" id="equal">=</button></td>
                            <td><button class="btn-operator" id="+">+</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
