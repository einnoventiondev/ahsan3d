@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>قائمة المستخدمين</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="{{ route('client.index') }}">قائمة المستخدمين</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('client.create') }}"> إنشاء منتج جديد</a>
                            <div class="table-responsive medical-datatable">
                                <table class="display" style="width:100%"
                                    id="basic-2">
    
                                    <thead>
                                <tr>

                                    <th>غير نشط</th>
                                    <th>نشيط</th>
                                    <th>سجل</th>
                                    <th>أعضاء الفريق</th>
                                    <th>اقتراح</th>
                                    <th>فاتورة</th>
                                    <th>دفع</th>
                                    <th>طلب</th>
                                    <th></th>
                                </tr>
                                    </thead>
                                @foreach ($clients as $client)
                                <tr>

                                    <td>{{ $client->inactive}}</td>
                                    <td>{{ $client->active }}</td>
                                    <td>{{ $client->log}}</td>
                                    <td>{{ $client->team_member }}</td>
                                    <td>
                                        <a href="{{ asset(  $client->proposal)
                                            }}" download="{{ $client->proposal
                                            }}">Download</a>
                                    </td>
                                    <td>
                                        <a href="{{ asset(  $client->invoice)
                                            }}" download="{{ $client->invoice
                                            }}">Download</a>
                                    </td>

                                    <td>{{ $client->payment }}</td>
                                    <td>{{$client->request}}</td>
                                    <td>
                                        <form action="{{ route('client.destroy',
                                            $client->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('client.edit', $client->id)
                                                }}">يحرر</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn
                                                btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                    
@endsection
