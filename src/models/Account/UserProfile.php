<?php

function DisplayUser($username)
{
    $connection = Database::getDBconnection();
    $user = $connection->FetchUser($username);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/AccountView.php';
}

function ViewMyProfile($username)
{
    $connection = Database::getDBconnection();
    $user = $connection->FetchUser($username);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ProfileView.php';
}

function DisplayContact($username)
{
    $connection = Database::getDBconnection();
    $user = $connection->FetchUser($username);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ContactView.php';
}

function DisplayPosts()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->GetOffers($username);
    $count = mysqli_num_rows($result);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/postview.php';
}

function ResetPw(){
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->ResetPw($username);
}

function Accept($id)
{
    $connection = Database::getDBconnection();
    $result = $connection->AcceptRequest($id);
    echo "AccSuccess";
}

function Decline($id)
{
    $connection = Database::getDBconnection();
    $result = $connection->DeclineRequest($id);
    echo "DecSuccess";
}

function DisplayRequests()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->SearchRequests($username);
    $count = mysqli_num_rows($result);
    $case = 1;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ViewRequests.php';
}

function DisplayMyAccReq()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->MyAcceptedRequests($username);
    $count = mysqli_num_rows($result);
    $case = 3;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ViewRequests.php';
}
function DisplayReqIAcc()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->RequestsIAccpeted($username);
    $count = mysqli_num_rows($result);
    $case = 2;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ViewRequests.php';
}

function DisplaySentReq()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->SentRequests($username);
    $count = mysqli_num_rows($result);
    $case = 4;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ViewRequests.php';
}

