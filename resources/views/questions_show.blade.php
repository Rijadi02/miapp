<x-home-master>
    @section('content')
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->

        <!--Page Header End-->

        <!--Destinations Details Start-->
        <section class="destinations-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="destinations-details__left">

                            <div class="destinations-details__faq">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                                    @foreach ($questions as $question)
                                        <div class="accrodion active mb-5">
                                            <div class="accrodion-content" style="display: none;">
                                                <div class="inner">

                                                    <p class="transliteration">{!! ($question->question) !!}</p>
                                                    <p class="transliteration">{!! \Carbon\Carbon::parse($question->created_at)->diffForHumans() !!}</p>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="d-flex">

                                                                <form method="POST" style="padding-right:10%" action="{{ route('questions.update', $question->id) }}">
                                                                @csrf
                                                                <button type="submit"  class="btn btn-primary" >
                                                                    E pergjigjur
                                                                </button>
                                                                </form>

                                                                <form method="POST" action="{{ route('questions.delete', $question->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" class="btn btn-danger" >
                                                                        Shlyej
                                                                    </button>
                                                                </form>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Destinations Details End-->


    @endsection

</x-home-master>
