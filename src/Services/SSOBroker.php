<?php
namespace Kominfos\SSO\Services\SSOBroker;

use Jasny\SSO\Broker;

/**
 * Single sign-on broker.
 *
 * The broker lives on the website visited by the user. The broken doesn't have any user credentials stored. Instead it
 * will talk to the SSO server in name of the user, verifying credentials and getting user information.
 */
class SSOBroker extends Broker
{
    
}
