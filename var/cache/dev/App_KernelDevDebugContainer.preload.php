<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerLqS9RPK\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerLqS9RPK/EntityManager_9a5be93.php';
require __DIR__.'/ContainerLqS9RPK/getWebpackEncore_TagRendererService.php';
require __DIR__.'/ContainerLqS9RPK/getWebpackEncore_ExceptionListenerService.php';
require __DIR__.'/ContainerLqS9RPK/getWebpackEncore_EntrypointLookupDefaultService.php';
require __DIR__.'/ContainerLqS9RPK/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerLqS9RPK/getValidator_ExpressionService.php';
require __DIR__.'/ContainerLqS9RPK/getValidator_EmailService.php';
require __DIR__.'/ContainerLqS9RPK/getValidator_BuilderService.php';
require __DIR__.'/ContainerLqS9RPK/getValidatorService.php';
require __DIR__.'/ContainerLqS9RPK/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerLqS9RPK/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerLqS9RPK/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerLqS9RPK/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerLqS9RPK/getTwigService.php';
require __DIR__.'/ContainerLqS9RPK/getSession_FactoryService.php';
require __DIR__.'/ContainerLqS9RPK/getServicesResetterService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerLqS9RPK/getSecrets_VaultService.php';
require __DIR__.'/ContainerLqS9RPK/getRouting_LoaderService.php';
require __DIR__.'/ContainerLqS9RPK/getPropertyAccessorService.php';
require __DIR__.'/ContainerLqS9RPK/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_Type_FormService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_Type_FileService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_Type_EntityService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_Type_ColorService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_ServerParamsService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_RegistryService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_FactoryService.php';
require __DIR__.'/ContainerLqS9RPK/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerLqS9RPK/getErrorControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerLqS9RPK/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerLqS9RPK/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerLqS9RPK/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerLqS9RPK/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerLqS9RPK/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerLqS9RPK/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerLqS9RPK/getCache_SystemClearerService.php';
require __DIR__.'/ContainerLqS9RPK/getCache_SystemService.php';
require __DIR__.'/ContainerLqS9RPK/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerLqS9RPK/getCache_AppClearerService.php';
require __DIR__.'/ContainerLqS9RPK/getCache_AppService.php';
require __DIR__.'/ContainerLqS9RPK/getAssets_PackagesService.php';
require __DIR__.'/ContainerLqS9RPK/getTemplateControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getRedirectControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getLoginFormAuthenticatorService.php';
require __DIR__.'/ContainerLqS9RPK/getUserRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getStudioRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getRoleRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getMovieRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getEquipmentRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getCategoryRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getAssignStatusRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getAssignRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getActorRepositoryService.php';
require __DIR__.'/ContainerLqS9RPK/getRegistrationFormTypeService.php';
require __DIR__.'/ContainerLqS9RPK/getMovieFormTypeService.php';
require __DIR__.'/ContainerLqS9RPK/getEquipmentTypeService.php';
require __DIR__.'/ContainerLqS9RPK/getUserFixruesService.php';
require __DIR__.'/ContainerLqS9RPK/getRoleFixruesService.php';
require __DIR__.'/ContainerLqS9RPK/getMovieFixturesService.php';
require __DIR__.'/ContainerLqS9RPK/getEquipmentFixturesService.php';
require __DIR__.'/ContainerLqS9RPK/getCategoryFixturesService.php';
require __DIR__.'/ContainerLqS9RPK/getActorFixturesService.php';
require __DIR__.'/ContainerLqS9RPK/getVinylControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getSecurityControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getRegistrationControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getMoviesControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getMovieControllerService.php';
require __DIR__.'/ContainerLqS9RPK/getEquipmentControllerService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_ZFcJjKUService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_VRM4WuBService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_JIxfAsiService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_BRdave9Service.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_YU8H6veService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_Rg386KService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_I4k6JeaService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_7P87fGMService.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_7884i71Service.php';
require __DIR__.'/ContainerLqS9RPK/get_ServiceLocator_1eTIucEService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\WebpackEncoreBundle\WebpackEncoreBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\EquipmentController';
$classes[] = 'App\Controller\MovieController';
$classes[] = 'App\Controller\MoviesController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\VinylController';
$classes[] = 'App\DataFixtures\ActorFixtures';
$classes[] = 'App\DataFixtures\CategoryFixtures';
$classes[] = 'App\DataFixtures\EquipmentFixtures';
$classes[] = 'App\DataFixtures\MovieFixtures';
$classes[] = 'App\DataFixtures\RoleFixrues';
$classes[] = 'App\DataFixtures\UserFixrues';
$classes[] = 'App\EventSubscriber\JWTSubscriber';
$classes[] = 'App\Form\EquipmentType';
$classes[] = 'App\Form\MovieFormType';
$classes[] = 'App\Form\RegistrationFormType';
$classes[] = 'App\Repository\ActorRepository';
$classes[] = 'App\Repository\AssignRepository';
$classes[] = 'App\Repository\AssignStatusRepository';
$classes[] = 'App\Repository\CategoryRepository';
$classes[] = 'App\Repository\EquipmentRepository';
$classes[] = 'App\Repository\MovieRepository';
$classes[] = 'App\Repository\RoleRepository';
$classes[] = 'App\Repository\StudioRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\LoginFormAuthenticator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ResetAssetsEventListener';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookup';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ExceptionListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\TagRenderer';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/ec/ecf85552597d16f65a69a1e8eab5b984.php';
require_once __DIR__.'/twig/ac/ac299155accdfb57885344ee9195c33c.php';
require_once __DIR__.'/twig/49/494a5fbb8e6578f0a77e9dc6c440991b.php';
require_once __DIR__.'/twig/aa/aa92b7aae6255ab6b023da19c17e0b8e.php';
require_once __DIR__.'/twig/c2/c27273fab94cc72de99c43f0af8def8a.php';
require_once __DIR__.'/twig/86/86e303476e4d0f62ee1e2361ea3caccc.php';
require_once __DIR__.'/twig/b3/b359378066fa1e1593e0e6640c6008ec.php';
require_once __DIR__.'/twig/ae/ae4e98c7427fda66b9ac2c00a4635de4.php';
require_once __DIR__.'/twig/8d/8d5100e24313650567535659769688b0.php';
require_once __DIR__.'/twig/17/175d5401104efbac2b90a2c5f8770788.php';
require_once __DIR__.'/twig/26/26263822568865559caeedca70df1b30.php';
require_once __DIR__.'/twig/9d/9d081dd869d39e95e468e5d73ccc4a81.php';
require_once __DIR__.'/twig/91/91d9166f7e0c82a3109043d860ca8a9e.php';
require_once __DIR__.'/twig/e1/e18b5a8f73f9cd4a0eb641cc0ed43152.php';
require_once __DIR__.'/twig/01/014f0619ca98ef96cb6ccb17cb82d59f.php';
require_once __DIR__.'/twig/dc/dcbe12c02ec0ae79c33cbe692f0a807c.php';
require_once __DIR__.'/twig/1b/1b9411412be1447a768eb415ff061391.php';
require_once __DIR__.'/twig/8d/8df428dda653862391b800eb6adda47d.php';
require_once __DIR__.'/twig/18/18ad85891c9b4247614f2f7e5704e3cc.php';
require_once __DIR__.'/twig/08/08b1a5cdbb0908c6c1d12648bf0cbeae.php';
require_once __DIR__.'/twig/79/7984753b018003b85a1c52e0d00e045e.php';
require_once __DIR__.'/twig/38/38e620220edbeaab8806684632b99f92.php';
require_once __DIR__.'/twig/c1/c147f48cd04963b5adc394d62f5cff96.php';
require_once __DIR__.'/twig/41/41eb6b5101a5b16f9d22c7d9dbb889e9.php';
require_once __DIR__.'/twig/4a/4a7d908d06f0f3f200aca2deb77e0068.php';
require_once __DIR__.'/twig/a4/a4dae16eb896bfc979eff172ed23da0a.php';
require_once __DIR__.'/twig/5e/5e6451cb44bf3e4d4141f9c30639938e.php';
require_once __DIR__.'/twig/28/281b90127a71c081696693fccf874698.php';
require_once __DIR__.'/twig/81/81e3a693ed875fac5df54a9528fb6026.php';
require_once __DIR__.'/twig/4b/4b8dfc0dfd4312756c05ad6b709fb40b.php';
require_once __DIR__.'/twig/f9/f956eb17c1aad3035e91f68e0b4e08c9.php';
require_once __DIR__.'/twig/10/10e674d7a49f53b85c1a40eda964fcea.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Routing\\Annotation\\Route';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\Length';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\NotBlank';
$classes[] = 'Symfony\\Component\\Validator\\Mapping\\ClassMetadata';
$classes[] = 'Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form';
$preloaded = Preloader::preload($classes, $preloaded);
