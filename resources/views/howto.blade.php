@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header display-4 text-center text-secondary">How It Works</div>

                <div class="card-body">
                    <p>
                        <strong>ANS</strong> is not a rocket science. It's a simple place to ask question and
                        you don't need to be any high level tech person just browse the website and you will easily
                        understand the working. Below mentioned the overiew how it works.
                        <h3>Steps To Ask Quesetions:</h3>
                        <ul>
                            <li>Register/Login To the website.</li>
                            <li>Click On Ask Question.</li>
                            <li>Add the question title and explain a few things regarding question like example by which people can easily understand your question.</li>
                            <li>Submit the question without delay.</li>
                            <li>Share the question with your friends family with the help of sharing options and tell them to suggest something on what you've asked.</li>
                            <li>Wait for the responses and select the best suggestion you liked, which will help others too. Also keep helping others by your suggestions.</li>
                            **Note: You can delete your questions as long as you are not having answers to that question. As soon as the vote count increases and answers
                            increases you won't be able to remove your asked question.
                        </ul>
                        <Strong class="text-danger">Warning: Do not try to post any illegal question or answers that may lead to the problem or violence. Questions & Answers
                            must not include and harmful or irrelevant content. Breaking the rules will lead to your Id & Questions termination from the website along with all
                            answers and votes.
                        </Strong>
                    </p>
                    <p>
                        Comming on the website you will be directly get some questions asked by the people who are
                        seeking for the answers and suggestions and it's a great to help them out with your suggestions.
                        You can see number of answers to the question, number of votes on that questions and number of
                        views of that questions. <br>
                        Clicking on to any question you will be re-drectied to the question page where you can see complete
                        details of the question what the user wants to ask and what answers/suggestions he needed. Along
                        with the question detail you will be given a vote control to <strong> <i class="fa fa-caret-up text-secondary"></i> Upvote (Useful Question)</strong>
                        or <strong><i class="fa fa-caret-down text-secondary"></i>  Downvote (Useless Question)</strong> the question so that useless questions can be removed
                        later on. You can also mark the question as <strong><i class="fa fa-star text-warning"></i> Favorite</strong>.
                    </p>
                    <p>
                        If you want to know if any question has accepted answer by the user you will see the question hightlighted
                        by green color stating that it has an accepted answer in it. If your answer is having top votes it will be seen on top of all answers and maybe it will get acceptance by the questioned user too.
                        You can ask questions from your side by loggin into the platform with your verified email id and then you can ask question from the main page and you will
                        be redirected to Ask Question Editor where you can fill up your question and give a little bit of hint about
                        the question to the users what actually is the problem and share this thing with your friends so that you can
                        have their help in resolving your problems.
                        Sharing is benficial to ask people which you know and get their suggestions as you cannot reach out to people
                        seperately asking their suggestions and when you get the suitable suggestion you can <b><i class="fa fa-check text-success"></i> accept that suggestion</b> and mark
                        that as best answer.
                        <strong>You are free to answer others question and vote others answers up and down so it will be easier for user who
                            asked the question and help him/her selecting the best answer with maximum number of votes.</strong>
                            <br>
                        ANS is a better way to ask publically your confusing questions and help
                        this organization from user to user.
                    </p>
                    <h3 class="text-center">ASK from Others & SUGGEST to Others</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
