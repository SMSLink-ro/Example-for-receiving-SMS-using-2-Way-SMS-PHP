# Example for receiving SMS using 2-Way SMS and PHP

This is an example for receiving a SMS MO (Mobile Originated) sent by a mobile subscriber to a shortcode using SMSLink - [2-Way SMS](https://www.smslink.ro/2-way-sms.html). 

SMSLink.ro allows you to send SMS to all mobile networks in Romania and also to more than 168 countries and more than 1000 mobile operators worldwide. 

## Requirements & Usage

1. Create an account on [SMSLink.ro](https://www.smslink.ro/inregistrare/)
2. Activate a dedicated or a shared shortcode using 2-Way SMS service, by accessing [SMSLink.ro / 2-Way SMS / 2-Way SMS Campaigns / Create Campaign](https://www.smslink.ro/sms/two-way/campaigns-list.php). 
3. Configure a public URL endpoint where SMSLink.ro will send to you each SMS sent by the mobile subscribers to the shortcode. SMS MO (Mobile Originated) are sent by default as HTTPS(S) GET parameters, but you may choose between HTTPS(S) GET, HTTPS(S) POST and HTTPS(S) POST as JSON, by changing the coresponding setting in your SMSLink account.

## Parameters for the SMS MO (Mobile Originated)

- *sender* the Sender of the SMS (ie. 07xyzzzzzz)
- *receiver* the Shortcode on which the SMS was sent (ie. 17xy, 18xy, 37xy, 38xy etc.)
- *message* the Message sent by the Sender to the Shortcode
- *timestamp* the Timestamp in which the Message was received on the Shortcode, in UNIX Timestamp format
- *network_id* the Network ID in which the Sender is located, with the following possible values:
  - 1 for Vodafone Romania
  - 2 for Orange Romania
  - 3 for Telekom Romania Mobile / Telekom Romania
  - 5 for Digimobil (RCS-RDS)
- *network_name* the Network Name corresponding to the Network ID

## Responding to the SMS MO (Mobile Originated) 

For each received SMS you may send a SMS response to the sender (mobile subscriber) using any of the following methods:

- Using SMSLink - SMS Gateway API, such as SMS Gateway (HTTP), SMS Gateway (SOAP), SMS Gateway (JSON) or SMS Gateway (BULK)
- Using the output of this script, by writing the desired response below, if you enable this coresponding option in [SMSLink.ro / 2-Way SMS / 2-Way SMS Campaigns / Campaign Settings](https://www.smslink.ro/sms/two-way/campaigns-list.php). In this case the SMSLink will read the script output and will send an SMS to the sender with the output text. Please note that the output should be plain text (you should not output any HTML code).

## 2-Way SMS API Documentation

The [complete documentation](https://www.smslink.ro/2-way-sms-documentatie-api.html) of the SMSLink - 2-Way SMS API can be found [here](https://www.smslink.ro/2-way-sms-documentatie-api.html).

## SMS Gateway API Documentation

The [complete documentation](https://www.smslink.ro/sms-gateway-documentatie-sms-gateway.html) of the SMSLink - SMS Gateway API can be found [here](https://www.smslink.ro/sms-gateway-documentatie-sms-gateway.html), describing all available APIs (HTTP GET / POST, SOAP / WSDL, JSON and more).

## Additional modules and integrations

SMSLink also provides modules for major eCommerce platforms (on-premise & on-demand), integrations using Microsoft Power Automate, Zapier or Integromat and many other useful features. Read more about all available features [here](https://www.smslink.ro/sms-gateway.html). 

## Support

For technical support inquiries contact us at contact@smslink.ro or by using any other available method described [here](https://www.smslink.ro/contact.php).
