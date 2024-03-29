@extends('back.app')

@section('content')

<!-- Knowledge base question Content  -->
<section id="knowledge-base-question">
    <div class="row">
        <div class="col-lg-3 col-md-5 col-12 order-2 order-md-1">
            <div class="card">
                <div class="card-body">
                    <h6 class="kb-title">
                        <i data-feather="info" class="font-medium-4 mr-50"></i><span>Related Questions</span>
                    </h6>

                    <div class="list-group list-group-circle mt-1">
                        <a href="javascript:void(0)" class="list-group-item text-body">How Secure Is My Password?</a>
                        <a href="javascript:void(0)" class="list-group-item text-body">Can I Change My Username?</a>
                        <a href="javascript:void(0)" class="list-group-item text-body">Where Can I Upload My Avatar?</a>
                        <a href="javascript:void(0)" class="list-group-item text-body">How Do I Change My Timezone?</a>
                        <a href="javascript:void(0)" class="list-group-item text-body">How Do I Change My Password?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-7 col-12 order-1 order-md-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-1">
                        <i data-feather="smartphone" class="font-medium-5 mr-25"></i>
                        <span>Why Was My Developer Application Rejected?</span>
                    </h4>
                    <p class="mb-2">Last updated on 10 Dec 2018</p>
                    <p>
                        It has been said that astronomy is a humbling and character-building experience. There is perhaps no better
                        demonstration of the folly of human conceits than this distant image of our tiny world. To me, it
                        underscores our responsibility to deal more kindly with one another, and to preserve and cherish the pale
                        blue dot, the only home we’ve ever known. The Earth is a very small stage in a vast cosmic arena. Think of
                        the rivers of blood spilled by all those generals and emperors so that, in glory and triumph, they could
                        become the momentary masters of a fraction of a dot. Think of the endless cruelties visited by the
                        inhabitants of one corner of this pixel on the scarcely distinguishable inhabitants of some other corner,
                        how frequent their misunderstandings, how eager they are to kill one another, how fervent their hatreds.
                    </p>
                    <img src="../../../app-assets/images/pages/kb-image.jpg" class="img-fluid rounded w-100 my-1" alt="article-img" />
                    <h5 class="my-1">Houston</h5>
                    <p>
                        that may have seemed like a very long final phase. The auto targeting was taking us right into a … crater,
                        with a large number of big boulders and rocks … and it required … flying manually over the rock field to
                        find a reasonably good area.
                    </p>
                    <div class="list-group list-group-circle ml-2 mt-2">
                        <a href="javascript:void(0)" class="list-group-item text-body">
                            I am a stranger. I come in peace. Take me to your leader and there will be a massive reward for you in
                            eternity.
                        </a>
                        <a href="javascript:void(0)" class="list-group-item text-body">
                            It’s just mind-blowingly awesome. I apologize, and I wish I was more articulate, but it’s hard to be
                            articulate when your mind’s blown—but in a very good way.
                        </a>
                        <a href="javascript:void(0)" class="list-group-item text-body">
                            A good rule for rocket experimenters to follow is this
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Knowledge base question Content ends -->

@endsection
