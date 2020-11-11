<?php
// This file was auto-generated from sdk-root/src/data/runtime.sagemaker/2017-05-13/docs-2.json
return [ 'version' => '2.0', 'service' => '<p> The Amazon SageMaker runtime API. </p>', 'operations' => [ 'InvokeEndpoint' => '<p>After you deploy a model into production using Amazon SageMaker hosting services, your client applications use this API to get inferences from the model hosted at the specified endpoint. </p> <p>For an overview of Amazon SageMaker, see <a href="http://docs.aws.amazon.com/sagemaker/latest/dg/how-it-works.html">How It Works</a>. </p> <p>Amazon SageMaker strips all POST headers except those supported by the API. Amazon SageMaker might add additional headers. You should not rely on the behavior of headers outside those enumerated in the request syntax. </p> <p>Cals to <code>InvokeEndpoint</code> are authenticated by using AWS Signature Version 4. For information, see <a href="http://docs.aws.amazon.com/AmazonS3/latest/API/sig-v4-authenticating-requests.html">Authenticating Requests (AWS Signature Version 4)</a> in the <i>Amazon S3 API Reference</i>.</p> <note> <p>Endpoints are scoped to an individual account, and are not public. The URL does not contain the account ID, but Amazon SageMaker determines the account ID from the authentication token that is supplied by the caller.</p> </note>', ], 'shapes' => [ 'BodyBlob' => [ 'base' => NULL, 'refs' => [ 'InvokeEndpointInput$Body' => '<p>Provides input data, in the format specified in the <code>ContentType</code> request header. Amazon SageMaker passes all of the data in the body to the model. </p> <p>For information about the format of the request body, see <a href="http://docs.aws.amazon.com/sagemaker/latest/dg/cdf-inference.html">Common Data Formats—Inference</a>.</p>', 'InvokeEndpointOutput$Body' => '<p>Includes the inference provided by the model.</p> <p>For information about the format of the response body, see <a href="http://docs.aws.amazon.com/sagemaker/latest/dg/cdf-inference.html">Common Data Formats—Inference</a>.</p>', ], ], 'CustomAttributesHeader' => [ 'base' => NULL, 'refs' => [ 'InvokeEndpointInput$CustomAttributes' => '<p/>', 'InvokeEndpointOutput$CustomAttributes' => '<p/>', ], ], 'EndpointName' => [ 'base' => NULL, 'refs' => [ 'InvokeEndpointInput$EndpointName' => '<p>The name of the endpoint that you specified when you created the endpoint using the <a href="http://docs.aws.amazon.com/sagemaker/latest/dg/API_CreateEndpoint.html">CreateEndpoint</a> API. </p>', ], ], 'Header' => [ 'base' => NULL, 'refs' => [ 'InvokeEndpointInput$ContentType' => '<p>The MIME type of the input data in the request body.</p>', 'InvokeEndpointInput$Accept' => '<p>The desired MIME type of the inference in the response.</p>', 'InvokeEndpointOutput$ContentType' => '<p>The MIME type of the inference returned in the response body.</p>', 'InvokeEndpointOutput$InvokedProductionVariant' => '<p>Identifies the production variant that was invoked.</p>', ], ], 'InternalFailure' => [ 'base' => '<p> An internal failure occurred. </p>', 'refs' => [], ], 'InvokeEndpointInput' => [ 'base' => NULL, 'refs' => [], ], 'InvokeEndpointOutput' => [ 'base' => NULL, 'refs' => [], ], 'LogStreamArn' => [ 'base' => NULL, 'refs' => [ 'ModelError$LogStreamArn' => '<p> The Amazon Resource Name (ARN) of the log stream. </p>', ], ], 'Message' => [ 'base' => NULL, 'refs' => [ 'InternalFailure$Message' => NULL, 'ModelError$Message' => NULL, 'ModelError$OriginalMessage' => '<p> Original message. </p>', 'ServiceUnavailable$Message' => NULL, 'ValidationError$Message' => NULL, ], ], 'ModelError' => [ 'base' => '<p> Model (owned by the customer in the container) returned an error 500. </p>', 'refs' => [], ], 'ServiceUnavailable' => [ 'base' => '<p> The service is unavailable. Try your call again. </p>', 'refs' => [], ], 'StatusCode' => [ 'base' => NULL, 'refs' => [ 'ModelError$OriginalStatusCode' => '<p> Original status code. </p>', ], ], 'ValidationError' => [ 'base' => '<p> Inspect your request and try again. </p>', 'refs' => [], ], ],];
