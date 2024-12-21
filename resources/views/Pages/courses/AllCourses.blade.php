@extends('All')
@section('content')

<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Multi Filter Select</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table
            id="multi-filter-select"
            class="display table table-striped table-hover"
          >
            <thead>
              <tr>
                <th>Course Name</th>
                <th>Description</th>
                <th>Instructor</th>
                <th>image_url</th>
                <th>Start date</th>
                <th>Add Quiz</th>
                <th>Action</th>
              </tr>

            </thead>
             <tbody>
   <tr>                      @foreach ($course as $cour )
                                 <td>{{$cour->name}}</td>
                                 <td>{{$cour->description}}</td>
                                 <td>{{$cour->instructor}}</td>
                                 <td>{{$cour->image_url}}</td>
                                 <td>{{$cour->created_at}}</td>
                                 <td>
                                    <form action='{{route('quizes.create')}}' mathod='POST'>
                                        @csrf
                                    <button
                                    type="submit"
                                    data-bs-toggle="tooltip"
                                     title=""
                                      class="btn btn-link btn-primary btn-lg"
                                      data-original-title="Remove">
                                    <i class="fa fa-check"></i></i>
                                  </button>
                                </form>
                                    </td>


                            <td>
                                <form action="{{route('courses.destroy',$cour->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                         <div class="form-button-action">
                                              <button
                                               type="submit"
                                               data-bs-toggle="tooltip"
                                                title=""
                                                 class="btn btn-link btn-primary btn-lg"
                                                 data-original-title="Remove"
                                      >
                                               <i class="fa fa-times"></i>
                                             </button>
                                 </form>

                                           <a href="{{ route('courses.edit', $cour->id)}}">

                                      <button
                                        type="submit"
                                        data-bs-toggle="tooltip"
                                        title=""
                                        class="btn btn-link btn-danger"
                                        data-original-title="Edit Task"
                                      >
                                        <i class="fa fa-edit"></i>
                                      </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                             @endforeach

                 </tbody>

          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
            {{ $course->links() }} <!-- This will generate the pagination links -->
        </div>
      </div>

    </div>
  </div>

  @endsection

  <script src="{{asset('js/core/jquery-3.7.1.min.js')}}"></script>
  <script src="{{asset('js/core/popper.min.js')}}"></script>
  <script src="{{asset('js/core/bootstrap.min.js')}}"></script>

  <!-- jQuery Scrollbar -->
  <script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
  <!-- Datatables -->
  <script src="{{asset('js/plugin/datatables/datatables.min.js')}}"></script>
  <!-- Kaiadmin JS -->
  <script src="{{asset('js/kaiadmin.min.js')}}"></script>
  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="{{asset('js/setting-demo2.js')}}"></script>
  <script>
  $(document).ready(function () {


    $("#multi-filter-select").DataTable({
      pageLength: 5,
      initComplete: function () {
        this.api()
          .columns()
          .every(function () {
            var column = this;
            var select = $(
              '<select class="form-select"><option value=""></option></select>'
            )
              .appendTo($(column.footer()).empty())
              .on("change", function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                column
                  .search(val ? "^" + val + "$" : "", true, false)
                  .draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append(
                  '<option value="' + d + '">' + d + "</option>"
                );
              });
          });
      },
    });

    // Add Row

  });
</script>
</body>
</html>

