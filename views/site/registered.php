<?php

use yii\helpers\Html;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully registered using Yii-powered application.</p>

        <p><?= Html::a('Register Again...Just for fun!!!', ['/site/registration'], ['class'=>'btn btn-primary grid-button']) ?></p>

        <p><img src="images/aw.png" style="height:70px;"> APPLIED WEB </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Basic Information</h2>
                <hr style="height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">

                <ul style="list-style: none;">
                    <li><label>Name: </label>: <?= Html::encode($model->fullname) ?></li>
                    <li><label>Gender: </label>: <?= Html::encode($model->gender) ?></li>
                    <li><label>Date of Birth: </label>: <?= Html::encode($model->date_of_birth) ?></li>
                    <li><label>Years of Experience: </label>: <?= Html::encode($model->years_of_experience) ?></li>
                    <li><label>Industry: </label>: <?= Html::encode($model->industry) ?></li>
                    <li><label>Location: </label>: <?= Html::encode($model->location) ?></li>
                    <li><label>About Me: </label>: <?= Html::encode($model->about_me) ?></li>
                </ul>

            </div>
            <div class="col-lg-5">
                <h2>Skills</h2>
                <hr style="height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">

                <ul style="list-style: none;">
                    <li><label>Professional Title: </label>: <?= Html::encode($model->professional_title) ?></li>
                    <li><label>Career Level: </label>: <?= Html::encode($model->career_level) ?></li>
                    <li><label>Communication Level: </label>: <?= Html::encode($model->communication_level) ?></li>
                    <li><label>Organizational Level: </label>: <?= Html::encode($model->organizational_level) ?></li>
                    <li><label>Job Related Level: </label>: <?= Html::encode($model->job_related_level) ?></li>
                </ul>
            </div>

            <div class="col-lg-3">
                <h2>Contact</h2>
                <hr style="height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">

                <ul style="list-style: none;">
                    <li><label>Address</label>: <?= Html::encode($model->address) ?></li>
                    <li><label>Phone Number</label>: <?= Html::encode($model->phone_number) ?></li>
                    <li><label>Website</label>: <?= Html::encode($model->website) ?></li>
                    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
                </ul>                
            </div>
        </div>

    </div>
</div>