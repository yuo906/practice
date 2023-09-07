@extends('templates.template_website')
@section('main')
    <main class="container my-5">
        <h3>留言板</h3>
        <div class="my-3 container">
            @foreach ($contents as $item)
                {{-- @dd($item) --}}
                <div class="border my-3 p-3 w-100">
                    <div class="d-flex flex-column align-items-start mb-3">
                        <div class="d-flex justify-content-between w-100 my-3">
                            <span class="fs-3">{{ $item->id }}樓&nbsp;:&nbsp;{{ $item->content }}</span>
                            <div class="d-flex">
                                <a href="">
                                    <button class="btn btn-outline-success me-1">編輯</button>
                                </a>
                                {{-- <form action="{{ route('message.delete') }}" method="POST"> --}}
                                    <button type="submit" class="btn btn-outline-success">刪除</button>
                                {{-- </form> --}}
                            </div>
                        </div>
                        {{-- @dd($item->message) --}}
                        @foreach ($item->message as $response)
                            <div class="d-flex justify-content-between w-100 ">
                                <span class="fs-5 ms-5">回覆&nbsp;:&nbsp;{{ $response->response }}</span>
                                <div class="d-flex">
                                    <a href="">
                                        <button class="btn btn-outline-success me-1">編輯</button>
                                    </a>
                                    {{-- <form action="{{ route('message.delete') }}" method="POST"> --}}
                                        <button type="submit" class="btn btn-outline-success">刪除</button>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ route('message.store') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <input type="text" name="id" value="{{ $item->id }}" hidden>
                            <input name="response" id="" class="w-75">
                            <a href="{{ route('message.store') }}">
                                <button class="btn btn-success ms-3" type="submit">回覆</button>
                            </a>
                        </div>
                    </form>
                </div>
            @endforeach

            <form action="{{ route('message.create') }}" method="POST">
                @csrf
                <div class="d-flex justify-content-center my-3">
                    <input name="content" id="" class="w-75" style="height: 100px;">
                    <a href="{{ route('message.create') }}">
                        <button class="btn btn-success ms-3" type="submit">留言</button>
                    </a>
                </div>
            </form>
        </div>
    </main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteResponse(id) {
            Swal.fire({
                title: 'Do you want to delete the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Delete',
                denyButtonText: `Cancel`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })

        }
    </script>
@endsection
