<?php
namespace ILABAmazon\ServiceCatalog;

use ILABAmazon\AwsClient;

/**
 * This client is used to interact with the **AWS Service Catalog** service.
 * @method \ILABAmazon\Result acceptPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptPortfolioShareAsync(array $args = [])
 * @method \ILABAmazon\Result associateBudgetWithResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateBudgetWithResourceAsync(array $args = [])
 * @method \ILABAmazon\Result associatePrincipalWithPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePrincipalWithPortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result associateProductWithPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateProductWithPortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result associateServiceActionWithProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateServiceActionWithProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result associateTagOptionWithResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTagOptionWithResourceAsync(array $args = [])
 * @method \ILABAmazon\Result batchAssociateServiceActionWithProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchAssociateServiceActionWithProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result batchDisassociateServiceActionFromProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisassociateServiceActionFromProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result copyProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyProductAsync(array $args = [])
 * @method \ILABAmazon\Result createConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConstraintAsync(array $args = [])
 * @method \ILABAmazon\Result createPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result createPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortfolioShareAsync(array $args = [])
 * @method \ILABAmazon\Result createProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProductAsync(array $args = [])
 * @method \ILABAmazon\Result createProvisionedProductPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProvisionedProductPlanAsync(array $args = [])
 * @method \ILABAmazon\Result createProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result createServiceAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceActionAsync(array $args = [])
 * @method \ILABAmazon\Result createTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagOptionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConstraintAsync(array $args = [])
 * @method \ILABAmazon\Result deletePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result deletePortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortfolioShareAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProductAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProvisionedProductPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProvisionedProductPlanAsync(array $args = [])
 * @method \ILABAmazon\Result deleteProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result deleteServiceAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceActionAsync(array $args = [])
 * @method \ILABAmazon\Result deleteTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagOptionAsync(array $args = [])
 * @method \ILABAmazon\Result describeConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConstraintAsync(array $args = [])
 * @method \ILABAmazon\Result describeCopyProductStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCopyProductStatusAsync(array $args = [])
 * @method \ILABAmazon\Result describePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result describePortfolioShareStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePortfolioShareStatusAsync(array $args = [])
 * @method \ILABAmazon\Result describeProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsync(array $args = [])
 * @method \ILABAmazon\Result describeProductAsAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsAdminAsync(array $args = [])
 * @method \ILABAmazon\Result describeProductView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductViewAsync(array $args = [])
 * @method \ILABAmazon\Result describeProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisionedProductAsync(array $args = [])
 * @method \ILABAmazon\Result describeProvisionedProductPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisionedProductPlanAsync(array $args = [])
 * @method \ILABAmazon\Result describeProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result describeProvisioningParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisioningParametersAsync(array $args = [])
 * @method \ILABAmazon\Result describeRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecordAsync(array $args = [])
 * @method \ILABAmazon\Result describeServiceAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServiceActionAsync(array $args = [])
 * @method \ILABAmazon\Result describeTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagOptionAsync(array $args = [])
 * @method \ILABAmazon\Result disableAWSOrganizationsAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAWSOrganizationsAccessAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateBudgetFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateBudgetFromResourceAsync(array $args = [])
 * @method \ILABAmazon\Result disassociatePrincipalFromPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePrincipalFromPortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateProductFromPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateProductFromPortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateServiceActionFromProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateServiceActionFromProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result disassociateTagOptionFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateTagOptionFromResourceAsync(array $args = [])
 * @method \ILABAmazon\Result enableAWSOrganizationsAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAWSOrganizationsAccessAsync(array $args = [])
 * @method \ILABAmazon\Result executeProvisionedProductPlan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeProvisionedProductPlanAsync(array $args = [])
 * @method \ILABAmazon\Result executeProvisionedProductServiceAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeProvisionedProductServiceActionAsync(array $args = [])
 * @method \ILABAmazon\Result getAWSOrganizationsAccessStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAWSOrganizationsAccessStatusAsync(array $args = [])
 * @method \ILABAmazon\Result listAcceptedPortfolioShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAcceptedPortfolioSharesAsync(array $args = [])
 * @method \ILABAmazon\Result listBudgetsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBudgetsForResourceAsync(array $args = [])
 * @method \ILABAmazon\Result listConstraintsForPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConstraintsForPortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result listLaunchPaths(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLaunchPathsAsync(array $args = [])
 * @method \ILABAmazon\Result listOrganizationPortfolioAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationPortfolioAccessAsync(array $args = [])
 * @method \ILABAmazon\Result listPortfolioAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfolioAccessAsync(array $args = [])
 * @method \ILABAmazon\Result listPortfolios(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfoliosAsync(array $args = [])
 * @method \ILABAmazon\Result listPortfoliosForProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfoliosForProductAsync(array $args = [])
 * @method \ILABAmazon\Result listPrincipalsForPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalsForPortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result listProvisionedProductPlans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProvisionedProductPlansAsync(array $args = [])
 * @method \ILABAmazon\Result listProvisioningArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProvisioningArtifactsAsync(array $args = [])
 * @method \ILABAmazon\Result listProvisioningArtifactsForServiceAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProvisioningArtifactsForServiceActionAsync(array $args = [])
 * @method \ILABAmazon\Result listRecordHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecordHistoryAsync(array $args = [])
 * @method \ILABAmazon\Result listResourcesForTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesForTagOptionAsync(array $args = [])
 * @method \ILABAmazon\Result listServiceActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceActionsAsync(array $args = [])
 * @method \ILABAmazon\Result listServiceActionsForProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceActionsForProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result listStackInstancesForProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStackInstancesForProvisionedProductAsync(array $args = [])
 * @method \ILABAmazon\Result listTagOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagOptionsAsync(array $args = [])
 * @method \ILABAmazon\Result provisionProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise provisionProductAsync(array $args = [])
 * @method \ILABAmazon\Result rejectPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectPortfolioShareAsync(array $args = [])
 * @method \ILABAmazon\Result scanProvisionedProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scanProvisionedProductsAsync(array $args = [])
 * @method \ILABAmazon\Result searchProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProductsAsync(array $args = [])
 * @method \ILABAmazon\Result searchProductsAsAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProductsAsAdminAsync(array $args = [])
 * @method \ILABAmazon\Result searchProvisionedProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProvisionedProductsAsync(array $args = [])
 * @method \ILABAmazon\Result terminateProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateProvisionedProductAsync(array $args = [])
 * @method \ILABAmazon\Result updateConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConstraintAsync(array $args = [])
 * @method \ILABAmazon\Result updatePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePortfolioAsync(array $args = [])
 * @method \ILABAmazon\Result updateProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProductAsync(array $args = [])
 * @method \ILABAmazon\Result updateProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProvisionedProductAsync(array $args = [])
 * @method \ILABAmazon\Result updateProvisionedProductProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProvisionedProductPropertiesAsync(array $args = [])
 * @method \ILABAmazon\Result updateProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProvisioningArtifactAsync(array $args = [])
 * @method \ILABAmazon\Result updateServiceAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceActionAsync(array $args = [])
 * @method \ILABAmazon\Result updateTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTagOptionAsync(array $args = [])
 */
class ServiceCatalogClient extends AwsClient {}
