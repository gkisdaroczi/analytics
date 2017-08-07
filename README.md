# Google Analytics


Access and reports

> With the Google Analytics Reporting API, you can:  
> - Build custom dashboards to display Google Analytics data.
> - Automate complex reporting tasks to save time.
> - Integrate your Google Analytics data with other business applications.

Requirements
------------

Git 2.7.4
Docker 17.06
Composer 1.4.2
Google account (Console for manage projects and Analytics for data - in the same account, or you have to set the permissions)


Usage
-----

You need a Google Account. You have to have or have access to an Analytics account, because you need a view id.  
If you don't know what you have to be looking for, you can use this tool to get the valid view id:  
https://ga-dev-tools.appspot.com/account-explorer/

Create new a project or just modify an existing one, if you haven't enabled the Analytics Report API before.  
https://developers.google.com/api-client-library/php/auth/web-app  
https://developers.google.com/identity/sign-in/web/devconsole-project

For reporting create another credential: https://console.developers.google.com/iam-admin/serviceaccounts/  
And add the service's email address to the users whose manage the Analytics account.  
Help: https://developers.google.com/analytics/devguides/reporting/core/v4/quickstart/service-php

Use the Google Analytics report API v4.  
https://developers.google.com/analytics/devguides/reporting/core/v4/

Google analytics Reporting API Javascript  
https://developers.google.com/analytics/devguides/reporting/core/v4/basics

Useful links
------------

Google API help  
https://developers.google.com/api-client-library/

Google Analytics account tools  
https://www.googleapis.com/oauth2/v1/tokeninfo?access_token={access_token}  
https://ga-dev-tools.appspot.com/account-explorer/

The dimensions and metrics explorer lists and describes all the dimensions and metrics available through the Core Reporting API.  
https://developers.google.com/analytics/devguides/reporting/core/dimsmets

Describe the limits and quotas of requesting the Management APIs and Reporting APIs.  
https://developers.google.com/analytics/devguides/reporting/core/v4/limits-quotas
