@extends('layouts.backend.app')
@section('title', 'student list')
    @push('css')
    @endpush
@section('content')
    <div class="block full">
        <div class="block-title">

        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Sl</th>
                        <th class=" text-center">Student profile</th>
                        <th class=" text-center">Student name</th>
                        <th class=" text-center">Student Email</th>

                        <th class=" text-center">Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $key => $item)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td class=" text-center"> <img  style="width: 60px;" src="{{ asset('images/profile/' .  profile_pic_check($item->profile_pic))}}" alt="avatar"></td>

                            <td class=" text-center">{{ $item->name }}</td>
                            <td class=" text-center">{{$item->email}}</td>
                             <td class=" text-center">{{$item->created_at}}</td>
                            <td class="text-center">
                                <div class="btn-group">

                                <a href="{{ route('backend.students.show', $item->id) }}" data-toggle="tooltip"
                                        title="show" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" onclick='deleteData({{ $item->id }})'
                                        data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i
                                            class="fa fa-times">
                                          </i>
                                        </a>
                                </div>
                                <form id='delete-form-{{ $item->id }}'
                                    action="{{ route('backend.students.destroy', $item->id) }}" method="post"
                                    class='d-none'>
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>



        </div>

            <div class="clearfix">
            <div class="pull-right">
                {!! $students->links("pagination::bootstrap-4") !!}
            </div>

        </div>


</div>
    </div>

@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
         function deleteData(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                })
            }

            function resetForm(formId) {
                document.getElementById(formId).reset();
            }
    </script>
    {{-- <script src="{{ asset('backend/js/pages/tablesDatatables.js') }}"></script> --}}
    <script>
        $(function() {
            // TablesDatatables.init();

        });
    </script>
@endpush
