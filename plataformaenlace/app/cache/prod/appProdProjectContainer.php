<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_exits.twig_extension' => 'getFileExits_TwigExtensionService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.param_fetcher_listener' => 'getFosRest_ParamFetcherListenerService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService',
            'fos_rest.serializer' => 'getFosRest_SerializerService',
            'fos_rest.view.exception_wrapper_handler' => 'getFosRest_View_ExceptionWrapperHandlerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.view_response_listener' => 'getFosRest_ViewResponseListenerService',
            'fos_rest.violation_formatter' => 'getFosRest_ViolationFormatterService',
            'fos_user.change_password.form' => 'getFosUser_ChangePassword_FormService',
            'fos_user.change_password.form.handler.default' => 'getFosUser_ChangePassword_Form_Handler_DefaultService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form' => 'getFosUser_Group_FormService',
            'fos_user.group.form.handler' => 'getFosUser_Group_Form_HandlerService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form' => 'getFosUser_Profile_FormService',
            'fos_user.profile.form.handler' => 'getFosUser_Profile_Form_HandlerService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form' => 'getFosUser_Registration_FormService',
            'fos_user.registration.form.handler' => 'getFosUser_Registration_Form_HandlerService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form' => 'getFosUser_Resetting_FormService',
            'fos_user.resetting.form.handler' => 'getFosUser_Resetting_Form_HandlerService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username_email' => 'getFosUser_UserProvider_UsernameEmailService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'genemu.form.core.type.captcha' => 'getGenemu_Form_Core_Type_CaptchaService',
            'genemu.form.core.type.plain' => 'getGenemu_Form_Core_Type_PlainService',
            'genemu.form.core.type.recaptcha' => 'getGenemu_Form_Core_Type_RecaptchaService',
            'genemu.form.core.type.tinymce' => 'getGenemu_Form_Core_Type_TinymceService',
            'genemu.form.entity.type.ajaxentity' => 'getGenemu_Form_Entity_Type_AjaxentityService',
            'genemu.form.jquery.type.autocompleter.choice' => 'getGenemu_Form_Jquery_Type_Autocompleter_ChoiceService',
            'genemu.form.jquery.type.autocompleter.country' => 'getGenemu_Form_Jquery_Type_Autocompleter_CountryService',
            'genemu.form.jquery.type.autocompleter.currency' => 'getGenemu_Form_Jquery_Type_Autocompleter_CurrencyService',
            'genemu.form.jquery.type.autocompleter.document' => 'getGenemu_Form_Jquery_Type_Autocompleter_DocumentService',
            'genemu.form.jquery.type.autocompleter.entity' => 'getGenemu_Form_Jquery_Type_Autocompleter_EntityService',
            'genemu.form.jquery.type.autocompleter.language' => 'getGenemu_Form_Jquery_Type_Autocompleter_LanguageService',
            'genemu.form.jquery.type.autocompleter.locale' => 'getGenemu_Form_Jquery_Type_Autocompleter_LocaleService',
            'genemu.form.jquery.type.autocompleter.model' => 'getGenemu_Form_Jquery_Type_Autocompleter_ModelService',
            'genemu.form.jquery.type.autocompleter.timezone' => 'getGenemu_Form_Jquery_Type_Autocompleter_TimezoneService',
            'genemu.form.jquery.type.chosen.choice' => 'getGenemu_Form_Jquery_Type_Chosen_ChoiceService',
            'genemu.form.jquery.type.chosen.country' => 'getGenemu_Form_Jquery_Type_Chosen_CountryService',
            'genemu.form.jquery.type.chosen.currency' => 'getGenemu_Form_Jquery_Type_Chosen_CurrencyService',
            'genemu.form.jquery.type.chosen.document' => 'getGenemu_Form_Jquery_Type_Chosen_DocumentService',
            'genemu.form.jquery.type.chosen.entity' => 'getGenemu_Form_Jquery_Type_Chosen_EntityService',
            'genemu.form.jquery.type.chosen.language' => 'getGenemu_Form_Jquery_Type_Chosen_LanguageService',
            'genemu.form.jquery.type.chosen.locale' => 'getGenemu_Form_Jquery_Type_Chosen_LocaleService',
            'genemu.form.jquery.type.chosen.model' => 'getGenemu_Form_Jquery_Type_Chosen_ModelService',
            'genemu.form.jquery.type.chosen.timezone' => 'getGenemu_Form_Jquery_Type_Chosen_TimezoneService',
            'genemu.form.jquery.type.color' => 'getGenemu_Form_Jquery_Type_ColorService',
            'genemu.form.jquery.type.date' => 'getGenemu_Form_Jquery_Type_DateService',
            'genemu.form.jquery.type.file' => 'getGenemu_Form_Jquery_Type_FileService',
            'genemu.form.jquery.type.geolocation' => 'getGenemu_Form_Jquery_Type_GeolocationService',
            'genemu.form.jquery.type.image' => 'getGenemu_Form_Jquery_Type_ImageService',
            'genemu.form.jquery.type.rating' => 'getGenemu_Form_Jquery_Type_RatingService',
            'genemu.form.jquery.type.slider' => 'getGenemu_Form_Jquery_Type_SliderService',
            'genemu.form.jquery.type.tokeninput.choice' => 'getGenemu_Form_Jquery_Type_Tokeninput_ChoiceService',
            'genemu.form.jquery.type.tokeninput.country' => 'getGenemu_Form_Jquery_Type_Tokeninput_CountryService',
            'genemu.form.jquery.type.tokeninput.currency' => 'getGenemu_Form_Jquery_Type_Tokeninput_CurrencyService',
            'genemu.form.jquery.type.tokeninput.document' => 'getGenemu_Form_Jquery_Type_Tokeninput_DocumentService',
            'genemu.form.jquery.type.tokeninput.entity' => 'getGenemu_Form_Jquery_Type_Tokeninput_EntityService',
            'genemu.form.jquery.type.tokeninput.language' => 'getGenemu_Form_Jquery_Type_Tokeninput_LanguageService',
            'genemu.form.jquery.type.tokeninput.locale' => 'getGenemu_Form_Jquery_Type_Tokeninput_LocaleService',
            'genemu.form.jquery.type.tokeninput.model' => 'getGenemu_Form_Jquery_Type_Tokeninput_ModelService',
            'genemu.form.jquery.type.tokeninput.timezone' => 'getGenemu_Form_Jquery_Type_Tokeninput_TimezoneService',
            'genemu.form.model.type.ajaxmodel' => 'getGenemu_Form_Model_Type_AjaxmodelService',
            'genemu.form.type_recaptcha.validator' => 'getGenemu_Form_TypeRecaptcha_ValidatorService',
            'genemu.gd.captcha' => 'getGenemu_Gd_CaptchaService',
            'genemu.twig.extension.form' => 'getGenemu_Twig_Extension_FormService',
            'http_kernel' => 'getHttpKernelService',
            'ito_admin.admin.aula_foto' => 'getItoAdmin_Admin_AulaFotoService',
            'ito_admin.admin.aula_musical' => 'getItoAdmin_Admin_AulaMusicalService',
            'ito_admin.admin.comentario_aula' => 'getItoAdmin_Admin_ComentarioAulaService',
            'ito_admin.admin.comentario_evento' => 'getItoAdmin_Admin_ComentarioEventoService',
            'ito_admin.admin.contacto' => 'getItoAdmin_Admin_ContactoService',
            'ito_admin.admin.evento' => 'getItoAdmin_Admin_EventoService',
            'ito_admin.admin.evento_foto' => 'getItoAdmin_Admin_EventoFotoService',
            'ito_admin.admin.foto_slide' => 'getItoAdmin_Admin_FotoSlideService',
            'ito_admin.admin.ito_group' => 'getItoAdmin_Admin_ItoGroupService',
            'ito_admin.admin.ito_user' => 'getItoAdmin_Admin_ItoUserService',
            'ito_admin.admin.municipio' => 'getItoAdmin_Admin_MunicipioService',
            'ito_admin.admin.visitas' => 'getItoAdmin_Admin_VisitasService',
            'itofrontend.twig.hoteles' => 'getItofrontend_Twig_HotelesService',
            'itofrontend.twig.visitas' => 'getItofrontend_Twig_VisitasService',
            'ivory_google_map.bound' => 'getIvoryGoogleMap_BoundService',
            'ivory_google_map.bound.builder' => 'getIvoryGoogleMap_Bound_BuilderService',
            'ivory_google_map.business_account' => 'getIvoryGoogleMap_BusinessAccountService',
            'ivory_google_map.circle' => 'getIvoryGoogleMap_CircleService',
            'ivory_google_map.circle.builder' => 'getIvoryGoogleMap_Circle_BuilderService',
            'ivory_google_map.coordinate' => 'getIvoryGoogleMap_CoordinateService',
            'ivory_google_map.coordinate.builder' => 'getIvoryGoogleMap_Coordinate_BuilderService',
            'ivory_google_map.encoded_polyline' => 'getIvoryGoogleMap_EncodedPolylineService',
            'ivory_google_map.encoded_polyline.builder' => 'getIvoryGoogleMap_EncodedPolyline_BuilderService',
            'ivory_google_map.event' => 'getIvoryGoogleMap_EventService',
            'ivory_google_map.event.builder' => 'getIvoryGoogleMap_Event_BuilderService',
            'ivory_google_map.event_manager' => 'getIvoryGoogleMap_EventManagerService',
            'ivory_google_map.event_manager.builder' => 'getIvoryGoogleMap_EventManager_BuilderService',
            'ivory_google_map.ground_overlay' => 'getIvoryGoogleMap_GroundOverlayService',
            'ivory_google_map.ground_overlay.builder' => 'getIvoryGoogleMap_GroundOverlay_BuilderService',
            'ivory_google_map.helper.api' => 'getIvoryGoogleMap_Helper_ApiService',
            'ivory_google_map.helper.bound' => 'getIvoryGoogleMap_Helper_BoundService',
            'ivory_google_map.helper.coordinate' => 'getIvoryGoogleMap_Helper_CoordinateService',
            'ivory_google_map.helper.map' => 'getIvoryGoogleMap_Helper_MapService',
            'ivory_google_map.info_window' => 'getIvoryGoogleMap_InfoWindowService',
            'ivory_google_map.info_window.builder' => 'getIvoryGoogleMap_InfoWindow_BuilderService',
            'ivory_google_map.kml_layer' => 'getIvoryGoogleMap_KmlLayerService',
            'ivory_google_map.kml_layer.builder' => 'getIvoryGoogleMap_KmlLayer_BuilderService',
            'ivory_google_map.map' => 'getIvoryGoogleMap_MapService',
            'ivory_google_map.map.builder' => 'getIvoryGoogleMap_Map_BuilderService',
            'ivory_google_map.map_type_control' => 'getIvoryGoogleMap_MapTypeControlService',
            'ivory_google_map.map_type_control.builder' => 'getIvoryGoogleMap_MapTypeControl_BuilderService',
            'ivory_google_map.marker' => 'getIvoryGoogleMap_MarkerService',
            'ivory_google_map.marker.builder' => 'getIvoryGoogleMap_Marker_BuilderService',
            'ivory_google_map.marker_cluster' => 'getIvoryGoogleMap_MarkerClusterService',
            'ivory_google_map.marker_cluster.builder' => 'getIvoryGoogleMap_MarkerCluster_BuilderService',
            'ivory_google_map.marker_image' => 'getIvoryGoogleMap_MarkerImageService',
            'ivory_google_map.marker_image.builder' => 'getIvoryGoogleMap_MarkerImage_BuilderService',
            'ivory_google_map.marker_shape' => 'getIvoryGoogleMap_MarkerShapeService',
            'ivory_google_map.marker_shape.builder' => 'getIvoryGoogleMap_MarkerShape_BuilderService',
            'ivory_google_map.overview_map_control' => 'getIvoryGoogleMap_OverviewMapControlService',
            'ivory_google_map.overview_map_control.builder' => 'getIvoryGoogleMap_OverviewMapControl_BuilderService',
            'ivory_google_map.pan_control' => 'getIvoryGoogleMap_PanControlService',
            'ivory_google_map.pan_control.builder' => 'getIvoryGoogleMap_PanControl_BuilderService',
            'ivory_google_map.places_autocomplete.form.type' => 'getIvoryGoogleMap_PlacesAutocomplete_Form_TypeService',
            'ivory_google_map.places_autocomplete.helper' => 'getIvoryGoogleMap_PlacesAutocomplete_HelperService',
            'ivory_google_map.point' => 'getIvoryGoogleMap_PointService',
            'ivory_google_map.point.builder' => 'getIvoryGoogleMap_Point_BuilderService',
            'ivory_google_map.polygon' => 'getIvoryGoogleMap_PolygonService',
            'ivory_google_map.polygon.builder' => 'getIvoryGoogleMap_Polygon_BuilderService',
            'ivory_google_map.polyline' => 'getIvoryGoogleMap_PolylineService',
            'ivory_google_map.polyline.builder' => 'getIvoryGoogleMap_Polyline_BuilderService',
            'ivory_google_map.rectangle' => 'getIvoryGoogleMap_RectangleService',
            'ivory_google_map.rectangle.builder' => 'getIvoryGoogleMap_Rectangle_BuilderService',
            'ivory_google_map.rotate_control' => 'getIvoryGoogleMap_RotateControlService',
            'ivory_google_map.rotate_control.builder' => 'getIvoryGoogleMap_RotateControl_BuilderService',
            'ivory_google_map.scale_control' => 'getIvoryGoogleMap_ScaleControlService',
            'ivory_google_map.scale_control.builder' => 'getIvoryGoogleMap_ScaleControl_BuilderService',
            'ivory_google_map.size' => 'getIvoryGoogleMap_SizeService',
            'ivory_google_map.size.builder' => 'getIvoryGoogleMap_Size_BuilderService',
            'ivory_google_map.street_view_control' => 'getIvoryGoogleMap_StreetViewControlService',
            'ivory_google_map.street_view_control.builder' => 'getIvoryGoogleMap_StreetViewControl_BuilderService',
            'ivory_google_map.template.helper' => 'getIvoryGoogleMap_Template_HelperService',
            'ivory_google_map.zoom_control' => 'getIvoryGoogleMap_ZoomControlService',
            'ivory_google_map.zoom_control.builder' => 'getIvoryGoogleMap_ZoomControl_BuilderService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.metadata_factory' => 'getJmsSerializer_MetadataFactoryService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel' => 'getKernelService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.templating.helper.pagination' => 'getKnpPaginator_Templating_Helper_PaginationService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'lexik_form_filter.data_extraction_method.default' => 'getLexikFormFilter_DataExtractionMethod_DefaultService',
            'lexik_form_filter.data_extraction_method.key_values' => 'getLexikFormFilter_DataExtractionMethod_KeyValuesService',
            'lexik_form_filter.data_extraction_method.text' => 'getLexikFormFilter_DataExtractionMethod_TextService',
            'lexik_form_filter.doctrine_subscriber' => 'getLexikFormFilter_DoctrineSubscriberService',
            'lexik_form_filter.filter_prepare' => 'getLexikFormFilter_FilterPrepareService',
            'lexik_form_filter.form_data_extractor' => 'getLexikFormFilter_FormDataExtractorService',
            'lexik_form_filter.query_builder_updater' => 'getLexikFormFilter_QueryBuilderUpdaterService',
            'lexik_form_filter.type.filter' => 'getLexikFormFilter_Type_FilterService',
            'lexik_form_filter.type.filter_boolean' => 'getLexikFormFilter_Type_FilterBooleanService',
            'lexik_form_filter.type.filter_checkbox' => 'getLexikFormFilter_Type_FilterCheckboxService',
            'lexik_form_filter.type.filter_choice' => 'getLexikFormFilter_Type_FilterChoiceService',
            'lexik_form_filter.type.filter_date' => 'getLexikFormFilter_Type_FilterDateService',
            'lexik_form_filter.type.filter_date_range' => 'getLexikFormFilter_Type_FilterDateRangeService',
            'lexik_form_filter.type.filter_datetime' => 'getLexikFormFilter_Type_FilterDatetimeService',
            'lexik_form_filter.type.filter_datetime_range' => 'getLexikFormFilter_Type_FilterDatetimeRangeService',
            'lexik_form_filter.type.filter_entity' => 'getLexikFormFilter_Type_FilterEntityService',
            'lexik_form_filter.type.filter_field' => 'getLexikFormFilter_Type_FilterFieldService',
            'lexik_form_filter.type.filter_number' => 'getLexikFormFilter_Type_FilterNumberService',
            'lexik_form_filter.type.filter_number_range' => 'getLexikFormFilter_Type_FilterNumberRangeService',
            'lexik_form_filter.type.filter_text' => 'getLexikFormFilter_Type_FilterTextService',
            'lexik_form_filter.type_extension.filter_extension' => 'getLexikFormFilter_TypeExtension_FilterExtensionService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'logout_admin_handler' => 'getLogoutAdminHandlerService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'nelmio_api_doc.doc_comment_extractor' => 'getNelmioApiDoc_DocCommentExtractorService',
            'nelmio_api_doc.event_listener.request' => 'getNelmioApiDoc_EventListener_RequestService',
            'nelmio_api_doc.extractor.api_doc_extractor' => 'getNelmioApiDoc_Extractor_ApiDocExtractorService',
            'nelmio_api_doc.form.extension.description_form_type_extension' => 'getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService',
            'nelmio_api_doc.formatter.abstract_formatter' => 'getNelmioApiDoc_Formatter_AbstractFormatterService',
            'nelmio_api_doc.formatter.html_formatter' => 'getNelmioApiDoc_Formatter_HtmlFormatterService',
            'nelmio_api_doc.formatter.markdown_formatter' => 'getNelmioApiDoc_Formatter_MarkdownFormatterService',
            'nelmio_api_doc.formatter.simple_formatter' => 'getNelmioApiDoc_Formatter_SimpleFormatterService',
            'nelmio_api_doc.parser.form_type_parser' => 'getNelmioApiDoc_Parser_FormTypeParserService',
            'nelmio_api_doc.parser.jms_metadata_parser' => 'getNelmioApiDoc_Parser_JmsMetadataParserService',
            'nelmio_api_doc.parser.validation_parser' => 'getNelmioApiDoc_Parser_ValidationParserService',
            'nelmio_api_doc.twig.extension.extra_markdown' => 'getNelmioApiDoc_Twig_Extension_ExtraMarkdownService',
            'preview' => 'getPreviewService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sluggable.listener' => 'getSluggable_ListenerService',
            'sluggable.slugger' => 'getSluggable_SluggerService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService',
            'sonata.easy_extends.generator.serializer' => 'getSonata_EasyExtends_Generator_SerializerService',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.api.form.type.group' => 'getSonata_User_Api_Form_Type_GroupService',
            'sonata.user.api.form.type.user' => 'getSonata_User_Api_Form_Type_UserService',
            'sonata.user.block.account' => 'getSonata_User_Block_AccountService',
            'sonata.user.block.menu' => 'getSonata_User_Block_MenuService',
            'sonata.user.controller.api.group' => 'getSonata_User_Controller_Api_GroupService',
            'sonata.user.controller.api.user' => 'getSonata_User_Controller_Api_UserService',
            'sonata.user.editable_role_builder' => 'getSonata_User_EditableRoleBuilderService',
            'sonata.user.form.gender_list' => 'getSonata_User_Form_GenderListService',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService',
            'sonata.user.group_manager' => 'getSonata_User_GroupManagerService',
            'sonata.user.manager.user' => 'getSonata_User_Manager_UserService',
            'sonata.user.profile.form' => 'getSonata_User_Profile_FormService',
            'sonata.user.profile.form.handler' => 'getSonata_User_Profile_Form_HandlerService',
            'sonata.user.profile.form.type' => 'getSonata_User_Profile_Form_TypeService',
            'sonata.user.profile.menu_builder' => 'getSonata_User_Profile_MenuBuilderService',
            'sonata.user.registration.form' => 'getSonata_User_Registration_FormService',
            'sonata.user.registration.form.handler' => 'getSonata_User_Registration_Form_HandlerService',
            'sonata.user.registration.form.type' => 'getSonata_User_Registration_Form_TypeService',
            'sonata.user.serializer.handler.user' => 'getSonata_User_Serializer_Handler_UserService',
            'sonata.user.twig.global' => 'getSonata_User_Twig_GlobalService',
            'sonata.user.user_manager' => 'getSonata_User_UserManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.engine.php' => 'getTemplating_Engine_PhpService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.extension.stfalcon_tinymce' => 'getTwig_Extension_StfalconTinymceService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.expression' => 'getValidator_ExpressionService',
            'validator.mapping.class_metadata_factory' => 'getValidator_Mapping_ClassMetadataFactoryService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'view_image' => 'getViewImageService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'router',
            'fos_rest.templating' => 'templating',
            'fos_user.change_password.form.handler' => 'fos_user.change_password.form.handler.default',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'jms_serializer' => 'fos_rest.serializer',
            'mailer' => 'swiftmailer.mailer.default',
            'serializer' => 'fos_rest.serializer',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.user.authentication.form' => 'fos_user.profile.form',
            'sonata.user.authentication.form_handler' => 'fos_user.profile.form.handler',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'translator' => 'translator.default',
        );
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/annotations', false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/assetic/config'), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($this->get('templating.loader'), '', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/Resources');
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => $this->get('sonata.admin.route.cache_warmup')));
    }
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('json' => array('class' => 'Sonata\\Doctrine\\Types\\JsonType', 'commented' => true)));
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));
        $a->addEventSubscriber($this->get('sonata.easy_extends.doctrine.mapper'));
        $a->addEventListener(array(0 => 'prePersist'), $this->get('sluggable.listener'));
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'dbname' => 'plataforma', 'user' => 'root', 'password' => 14142135, 'charset' => 'UTF8', 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), $a, array());
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_0a0e3bea37ccc2ee2851a6205de3a5051d68586bba5c80e0850d74da2cf6c189');
        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_0a0e3bea37ccc2ee2851a6205de3a5051d68586bba5c80e0850d74da2cf6c189');
        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_0a0e3bea37ccc2ee2851a6205de3a5051d68586bba5c80e0850d74da2cf6c189');
        $d = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/ModelBundle/Resources/config/doctrine' => 'ItoSoftware\\Base\\ModelBundle\\Entity', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine' => 'FOS\\UserBundle\\Entity', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/config/doctrine' => 'Sonata\\UserBundle\\Entity', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/egeloen/google-map-bundle/Resources/config/doctrine' => 'Ivory\\GoogleMapBundle\\Entity'));
        $d->setGlobalBasename('mapping');
        $e = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $e->addDriver($d, 'ItoSoftware\\Base\\ModelBundle\\Entity');
        $e->addDriver($d, 'FOS\\UserBundle\\Entity');
        $e->addDriver($d, 'Sonata\\UserBundle\\Entity');
        $e->addDriver($d, 'Ivory\\GoogleMapBundle\\Entity');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/ModeloBundle/Entity')), 'WebApp\\ModeloBundle\\Entity');
        $f = new \Doctrine\ORM\Configuration();
        $f->setEntityNamespaces(array('ItoModelBundle' => 'ItoSoftware\\Base\\ModelBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'SonataUserBundle' => 'Sonata\\UserBundle\\Entity', 'WebAppModeloBundle' => 'WebApp\\ModeloBundle\\Entity', 'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\Entity'));
        $f->setMetadataCacheImpl($a);
        $f->setQueryCacheImpl($b);
        $f->setResultCacheImpl($c);
        $f->setMetadataDriverImpl($e);
        $f->setProxyDir('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/doctrine/orm/Proxies');
        $f->setProxyNamespace('Proxies');
        $f->setAutoGenerateProxyClasses(false);
        $f->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $f->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $f->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $f->addCustomStringFunction('unaccent', 'WebApp\\FrontendBundle\\Filter\\Unaccent');
        $this->services['doctrine.orm.default_entity_manager'] = $instance = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $f);
        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);
        return $instance;
    }
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'before'), 0);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'pagination'), 0);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.sortable', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.filtration', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'pagination'), 1);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelController'), -10);
        $instance->addListenerService('kernel.view', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelView'), 100);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.format_listener', 1 => 'onKernelRequest'), 34);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.param_fetcher_listener', 1 => 'onKernelController'), 5);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'nelmio_api_doc.event_listener.request', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('lexik_filter.prepare', array(0 => 'lexik_form_filter.filter_prepare', 1 => 'onFilterBuilderPrepare'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\CacheListener');
        $instance->addSubscriberService('lexik_form_filter.doctrine_subscriber', 'Lexik\\Bundle\\FormFilterBundle\\Event\\Subscriber\\DoctrineSubscriber');
        return $instance;
    }
    protected function getFileExits_TwigExtensionService()
    {
        return $this->services['file_exits.twig_extension'] = new \WebApp\FrontendBundle\Twig\Extension\FileExitsExtension();
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/Resources');
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'sonata_type_immutable_array' => 'sonata.core.form.type.array', 'sonata_type_boolean' => 'sonata.core.form.type.boolean', 'sonata_type_collection' => 'sonata.core.form.type.collection', 'sonata_type_translatable_choice' => 'sonata.core.form.type.translatable_choice', 'sonata_type_date_range' => 'sonata.core.form.type.date_range', 'sonata_type_datetime_range' => 'sonata.core.form.type.datetime_range', 'sonata_type_date_picker' => 'sonata.core.form.type.date_picker', 'sonata_type_datetime_picker' => 'sonata.core.form.type.datetime_picker', 'sonata_type_equal' => 'sonata.core.form.type.equal', 'sonata_block_service_choice' => 'sonata.block.form.type.block', 'sonata_type_container_template_choice' => 'sonata.block.form.type.container_template', 'sonata_type_admin' => 'sonata.admin.form.type.admin', 'sonata_type_model' => 'sonata.admin.form.type.model_choice', 'sonata_type_model_list' => 'sonata.admin.form.type.model_list', 'sonata_type_model_reference' => 'sonata.admin.form.type.model_reference', 'sonata_type_model_hidden' => 'sonata.admin.form.type.model_hidden', 'sonata_type_filter_number' => 'sonata.admin.form.filter.type.number', 'sonata_type_filter_choice' => 'sonata.admin.form.filter.type.choice', 'sonata_type_filter_default' => 'sonata.admin.form.filter.type.default', 'sonata_type_filter_date' => 'sonata.admin.form.filter.type.date', 'sonata_type_filter_date_range' => 'sonata.admin.form.filter.type.daterange', 'sonata_type_filter_datetime' => 'sonata.admin.form.filter.type.datetime', 'sonata_type_filter_datetime_range' => 'sonata.admin.form.filter.type.datetime_range', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'sonata_security_roles' => 'sonata.user.form.type.security_roles', 'sonata_user_profile' => 'sonata.user.profile.form.type', 'sonata_user_gender' => 'sonata.user.form.gender_list', 'sonata_user_registration' => 'sonata.user.registration.form.type', 'sonata_user_api_form_group' => 'sonata.user.api.form.type.group', 'sonata_user_api_form_user' => 'sonata.user.api.form.type.user', 'preview' => 'preview', 'view_image' => 'view_image', 'places_autocomplete' => 'ivory_google_map.places_autocomplete.form.type', 'filter_field' => 'lexik_form_filter.type.filter_field', 'filter' => 'lexik_form_filter.type.filter', 'filter_text' => 'lexik_form_filter.type.filter_text', 'filter_number' => 'lexik_form_filter.type.filter_number', 'filter_number_range' => 'lexik_form_filter.type.filter_number_range', 'filter_checkbox' => 'lexik_form_filter.type.filter_checkbox', 'filter_boolean' => 'lexik_form_filter.type.filter_boolean', 'filter_choice' => 'lexik_form_filter.type.filter_choice', 'filter_entity' => 'lexik_form_filter.type.filter_entity', 'filter_date' => 'lexik_form_filter.type.filter_date', 'filter_date_range' => 'lexik_form_filter.type.filter_date_range', 'filter_datetime' => 'lexik_form_filter.type.filter_datetime', 'filter_datetime_range' => 'lexik_form_filter.type.filter_datetime_range', 'genemu_recaptcha' => 'genemu.form.core.type.recaptcha', 'genemu_captcha' => 'genemu.form.core.type.captcha', 'genemu_plain' => 'genemu.form.core.type.plain', 'genemu_tinymce' => 'genemu.form.core.type.tinymce', 'genemu_ajaxmodel' => 'genemu.form.model.type.ajaxmodel', 'genemu_jquerycolor' => 'genemu.form.jquery.type.color', 'genemu_jquerydate' => 'genemu.form.jquery.type.date', 'genemu_jqueryfile' => 'genemu.form.jquery.type.file', 'genemu_jquerygeolocation' => 'genemu.form.jquery.type.geolocation', 'genemu_jqueryimage' => 'genemu.form.jquery.type.image', 'genemu_jqueryrating' => 'genemu.form.jquery.type.rating', 'genemu_jqueryslider' => 'genemu.form.jquery.type.slider', 'genemu_ajaxentity' => 'genemu.form.entity.type.ajaxentity', 'genemu_jquerychosen_choice' => 'genemu.form.jquery.type.chosen.choice', 'genemu_jquerychosen_language' => 'genemu.form.jquery.type.chosen.language', 'genemu_jquerychosen_country' => 'genemu.form.jquery.type.chosen.country', 'genemu_jquerychosen_timezone' => 'genemu.form.jquery.type.chosen.timezone', 'genemu_jquerychosen_locale' => 'genemu.form.jquery.type.chosen.locale', 'genemu_jquerychosen_entity' => 'genemu.form.jquery.type.chosen.entity', 'genemu_jquerychosen_document' => 'genemu.form.jquery.type.chosen.document', 'genemu_jquerychosen_model' => 'genemu.form.jquery.type.chosen.model', 'genemu_jquerychosen_currency' => 'genemu.form.jquery.type.chosen.currency', 'genemu_jqueryautocompleter_choice' => 'genemu.form.jquery.type.autocompleter.choice', 'genemu_jqueryautocompleter_language' => 'genemu.form.jquery.type.autocompleter.language', 'genemu_jqueryautocompleter_country' => 'genemu.form.jquery.type.autocompleter.country', 'genemu_jqueryautocompleter_timezone' => 'genemu.form.jquery.type.autocompleter.timezone', 'genemu_jqueryautocompleter_locale' => 'genemu.form.jquery.type.autocompleter.locale', 'genemu_jqueryautocompleter_entity' => 'genemu.form.jquery.type.autocompleter.entity', 'genemu_jqueryautocompleter_document' => 'genemu.form.jquery.type.autocompleter.document', 'genemu_jqueryautocompleter_model' => 'genemu.form.jquery.type.autocompleter.model', 'genemu_jqueryautocompleter_currency' => 'genemu.form.jquery.type.autocompleter.currency', 'genemu_jquerytokeninput_choice' => 'genemu.form.jquery.type.tokeninput.choice', 'genemu_jquerytokeninput_language' => 'genemu.form.jquery.type.tokeninput.language', 'genemu_jquerytokeninput_country' => 'genemu.form.jquery.type.tokeninput.country', 'genemu_jquerytokeninput_timezone' => 'genemu.form.jquery.type.tokeninput.timezone', 'genemu_jquerytokeninput_locale' => 'genemu.form.jquery.type.tokeninput.locale', 'genemu_jquerytokeninput_entity' => 'genemu.form.jquery.type.tokeninput.entity', 'genemu_jquerytokeninput_document' => 'genemu.form.jquery.type.tokeninput.document', 'genemu_jquerytokeninput_model' => 'genemu.form.jquery.type.tokeninput.model', 'genemu_jquerytokeninput_currency' => 'genemu.form.jquery.type.tokeninput.currency'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'sonata.admin.form.extension.field', 4 => 'sonata.admin.form.extension.field.mopa', 5 => 'nelmio_api_doc.form.extension.description_form_type_extension', 6 => 'lexik_form_filter.type_extension.filter_extension'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getFosRest_BodyListenerService()
    {
        return $this->services['fos_rest.body_listener'] = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);
    }
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'));
    }
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->services['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Util\FormatNegotiator();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher(NULL, NULL, NULL), array('methods' => NULL, 'prefer_extension' => '2.0', 'fallback_format' => 'html', 'priorities' => array()));
        return $instance;
    }
    protected function getFosRest_Inflector_DoctrineService()
    {
        return $this->services['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Util\Inflector\DoctrineInflector();
    }
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }
    protected function getFosRest_ParamFetcherListenerService()
    {
        return $this->services['fos_rest.param_fetcher_listener'] = new \FOS\RestBundle\EventListener\ParamFetcherListener($this, false);
    }
    protected function getFosRest_Request_ParamFetcherService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_rest.request.param_fetcher', 'request');
        }
        return $this->services['fos_rest.request.param_fetcher'] = $this->scopedServices['request']['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request'), $this->get('fos_rest.violation_formatter'), $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector.doctrine'), true, array('json' => false, 'html' => true));
    }
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), true, array('json' => false, 'html' => true), NULL);
    }
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), true, array('json' => false, 'html' => true), NULL);
    }
    protected function getFosRest_SerializerService()
    {
        $a = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $a->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL))));
        return $this->services['fos_rest.serializer'] = new \JMS\Serializer\Serializer($this->get('jms_serializer.metadata_factory'), $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \JMS\DiExtraBundle\DependencyInjection\Collection\LazyServiceMap($this, array('json' => 'jms_serializer.json_serialization_visitor', 'xml' => 'jms_serializer.xml_serialization_visitor', 'yml' => 'jms_serializer.yaml_serialization_visitor')), new \JMS\DiExtraBundle\DependencyInjection\Collection\LazyServiceMap($this, array('json' => 'jms_serializer.json_deserialization_visitor', 'xml' => 'jms_serializer.xml_deserialization_visitor')), $a);
    }
    protected function getFosRest_View_ExceptionWrapperHandlerService()
    {
        return $this->services['fos_rest.view.exception_wrapper_handler'] = new \FOS\RestBundle\View\ExceptionWrapperHandler();
    }
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');
        $instance->setExclusionStrategyGroups('');
        $instance->setExclusionStrategyVersion('');
        $instance->setSerializeNullStrategy(false);
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_ViewResponseListenerService()
    {
        return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener($this);
    }
    protected function getFosRest_ViolationFormatterService()
    {
        return $this->services['fos_rest.violation_formatter'] = new \FOS\RestBundle\Util\ViolationFormatter();
    }
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }
        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }
    protected function getFosUser_Group_FormService()
    {
        return $this->services['fos_user.group.form'] = $this->get('form.factory')->createNamed('fos_user_group_form', 'fos_user_group', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getFosUser_Group_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.group.form.handler', 'request');
        }
        return $this->services['fos_user.group.form.handler'] = $this->scopedServices['request']['fos_user.group.form.handler'] = new \FOS\UserBundle\Form\Handler\GroupFormHandler($this->get('fos_user.group.form'), $this->get('request'), $this->get('fos_user.group_manager'));
    }
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('ItoSoftware\\Base\\ModelBundle\\Entity\\Group');
    }
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.entity_manager'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group');
    }
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile_form', 'fos_user_profile', NULL, array('validation_groups' => array(0 => 'Profile', 1 => 'Default')));
    }
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }
        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('ItoSoftware\\Base\\ModelBundle\\Entity\\User');
    }
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('fos_user_registration_form', 'fos_user_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getFosUser_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.registration.form.handler', 'request');
        }
        return $this->services['fos_user.registration.form.handler'] = $this->scopedServices['request']['fos_user.registration.form.handler'] = new \FOS\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('ItoSoftware\\Base\\ModelBundle\\Entity\\User');
    }
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('fos_user_resetting_form', 'fos_user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }
        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\User');
    }
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), false, $this->get('request_stack'));
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        $instance->addRenderer($this->get('fragment.renderer.esi'));
        return $instance;
    }
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getGenemu_Form_Core_Type_CaptchaService()
    {
        return $this->services['genemu.form.core.type.captcha'] = new \Genemu\Bundle\FormBundle\Form\Core\Type\CaptchaType($this->get('genemu.gd.captcha'), array('enabled' => true, 'driver' => 'gd', 'width' => 100, 'height' => 30, 'length' => 4, 'format' => 'png', 'chars' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9), 'font_size' => 18, 'grayscale' => false, 'font_color' => array(0 => '252525', 1 => '8B8787', 2 => '550707', 3 => '3526E6', 4 => '88531E'), 'fonts' => array(0 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/akbar.ttf', 1 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/brushcut.ttf', 2 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/molten.ttf', 3 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/planetbe.ttf', 4 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/whoobub.ttf'), 'background_color' => 'DDDDDD', 'border_color' => '000000', 'code' => NULL));
    }
    protected function getGenemu_Form_Core_Type_PlainService()
    {
        return $this->services['genemu.form.core.type.plain'] = new \Genemu\Bundle\FormBundle\Form\Core\Type\PlainType();
    }
    protected function getGenemu_Form_Core_Type_RecaptchaService()
    {
        return $this->services['genemu.form.core.type.recaptcha'] = new \Genemu\Bundle\FormBundle\Form\Core\Type\ReCaptchaType($this->get('genemu.form.type_recaptcha.validator'), '', '', array());
    }
    protected function getGenemu_Form_Core_Type_TinymceService()
    {
        return $this->services['genemu.form.core.type.tinymce'] = new \Genemu\Bundle\FormBundle\Form\Core\Type\TinymceType(array('theme' => 'advanced'));
    }
    protected function getGenemu_Form_Entity_Type_AjaxentityService()
    {
        return $this->services['genemu.form.entity.type.ajaxentity'] = new \Genemu\Bundle\FormBundle\Form\Doctrine\Type\AjaxEntityType($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_ChoiceService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.choice'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('choice');
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_CountryService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.country'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('country');
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_CurrencyService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.currency'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('currency');
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_DocumentService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.document'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('document');
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_EntityService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.entity'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('entity');
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_LanguageService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.language'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('language');
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_LocaleService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.locale'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('locale');
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_ModelService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.model'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('model');
    }
    protected function getGenemu_Form_Jquery_Type_Autocompleter_TimezoneService()
    {
        return $this->services['genemu.form.jquery.type.autocompleter.timezone'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\AutocompleterType('timezone');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_ChoiceService()
    {
        return $this->services['genemu.form.jquery.type.chosen.choice'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('choice');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_CountryService()
    {
        return $this->services['genemu.form.jquery.type.chosen.country'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('country');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_CurrencyService()
    {
        return $this->services['genemu.form.jquery.type.chosen.currency'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('currency');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_DocumentService()
    {
        return $this->services['genemu.form.jquery.type.chosen.document'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('document');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_EntityService()
    {
        return $this->services['genemu.form.jquery.type.chosen.entity'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('entity');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_LanguageService()
    {
        return $this->services['genemu.form.jquery.type.chosen.language'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('language');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_LocaleService()
    {
        return $this->services['genemu.form.jquery.type.chosen.locale'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('locale');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_ModelService()
    {
        return $this->services['genemu.form.jquery.type.chosen.model'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('model');
    }
    protected function getGenemu_Form_Jquery_Type_Chosen_TimezoneService()
    {
        return $this->services['genemu.form.jquery.type.chosen.timezone'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ChosenType('timezone');
    }
    protected function getGenemu_Form_Jquery_Type_ColorService()
    {
        return $this->services['genemu.form.jquery.type.color'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ColorType(array());
    }
    protected function getGenemu_Form_Jquery_Type_DateService()
    {
        return $this->services['genemu.form.jquery.type.date'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\DateType(array());
    }
    protected function getGenemu_Form_Jquery_Type_FileService()
    {
        return $this->services['genemu.form.jquery.type.file'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\FileType(array(), '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web');
    }
    protected function getGenemu_Form_Jquery_Type_GeolocationService()
    {
        return $this->services['genemu.form.jquery.type.geolocation'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\GeolocationType();
    }
    protected function getGenemu_Form_Jquery_Type_ImageService()
    {
        return $this->services['genemu.form.jquery.type.image'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\ImageType('', array(), array());
    }
    protected function getGenemu_Form_Jquery_Type_RatingService()
    {
        return $this->services['genemu.form.jquery.type.rating'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\RatingType(array());
    }
    protected function getGenemu_Form_Jquery_Type_SliderService()
    {
        return $this->services['genemu.form.jquery.type.slider'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\SliderType();
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_ChoiceService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.choice'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('choice');
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_CountryService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.country'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('country');
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_CurrencyService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.currency'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('currency');
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_DocumentService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.document'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('document');
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_EntityService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.entity'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('entity');
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_LanguageService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.language'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('language');
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_LocaleService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.locale'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('locale');
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_ModelService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.model'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('model');
    }
    protected function getGenemu_Form_Jquery_Type_Tokeninput_TimezoneService()
    {
        return $this->services['genemu.form.jquery.type.tokeninput.timezone'] = new \Genemu\Bundle\FormBundle\Form\JQuery\Type\TokeninputType('timezone');
    }
    protected function getGenemu_Form_Model_Type_AjaxmodelService()
    {
        return $this->services['genemu.form.model.type.ajaxmodel'] = new \Genemu\Bundle\FormBundle\Form\Model\Type\AjaxModelType();
    }
    protected function getGenemu_Form_TypeRecaptcha_ValidatorService()
    {
        return $this->services['genemu.form.type_recaptcha.validator'] = new \Genemu\Bundle\FormBundle\Form\Core\Validator\ReCaptchaValidator($this->get('request'), '', array());
    }
    protected function getGenemu_Gd_CaptchaService()
    {
        return $this->services['genemu.gd.captcha'] = new \Genemu\Bundle\FormBundle\Gd\Type\Captcha($this->get('session'), 'ThisTokenIsNotSoSecretChangeIt');
    }
    protected function getGenemu_Twig_Extension_FormService()
    {
        return $this->services['genemu.twig.extension.form'] = new \Genemu\Bundle\FormBundle\Twig\Extension\FormExtension($this->get('twig.form.renderer'));
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'));
    }
    protected function getItoAdmin_Admin_AulaFotoService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\AulaFotoAdmin('ito_admin.admin.aula_foto', 'ItoSoftware\\Base\\ModelBundle\\Entity\\AulaFoto', 'ItoAdminBundle:AulaFotoAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Imagenes de aulas');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_AulaMusicalService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\AulaMusicalAdmin('ito_admin.admin.aula_musical', 'ItoSoftware\\Base\\ModelBundle\\Entity\\AulaMusical', 'ItoAdminBundle:AulaMusicalAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Aula Musical');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_ComentarioAulaService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\ComentarioAulaAdmin('ito_admin.admin.comentario_aula', 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioAula', 'SonataAdminBundle:CRUD');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Comentario de aulas');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_ComentarioEventoService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\ComentarioEventoAdmin('ito_admin.admin.comentario_evento', 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento', 'ItoAdminBundle:ComentarioEventoAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Eventos comentados');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_ContactoService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\ContactoAdmin('ito_admin.admin.contacto', 'ItoSoftware\\Base\\ModelBundle\\Entity\\Contacto', 'ItoAdminBundle:ContactoAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Contacto');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_EventoService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\EventoAdmin('ito_admin.admin.evento', 'ItoSoftware\\Base\\ModelBundle\\Entity\\Evento', 'ItoAdminBundle:EventoAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Evento');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_EventoFotoService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\EventoFotoAdmin('ito_admin.admin.evento_foto', 'ItoSoftware\\Base\\ModelBundle\\Entity\\EventoFoto', 'ItoAdminBundle:EventoFotoAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Imagenes de Eventos');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_FotoSlideService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\FotoSlideAdmin('ito_admin.admin.foto_slide', 'ItoSoftware\\Base\\ModelBundle\\Entity\\FotoSlide', 'SonataAdminBundle:CRUD');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Imagenes del Slide');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_ItoGroupService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\ItoGroupAdmin('ito_admin.admin.ito_group', 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group', 'ItoAdminBundle:ItoGroupAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Group');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_ItoUserService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\ItoUserAdmin('ito_admin.admin.ito_user', 'ItoSoftware\\Base\\ModelBundle\\Entity\\User', 'ItoAdminBundle:ItoUserAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('User');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_MunicipioService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\MunicipioAdmin('ito_admin.admin.municipio', 'ItoSoftware\\Base\\ModelBundle\\Entity\\Municipio', 'ItoAdminBundle:MunicipioAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Municipio');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItoAdmin_Admin_VisitasService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\VisitasAdmin('ito_admin.admin.visitas', 'ItoSoftware\\Base\\ModelBundle\\Entity\\Visitas', 'ItoAdminBundle:VisitasAdmin');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Visitas');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getItofrontend_Twig_HotelesService()
    {
        return $this->services['itofrontend.twig.hoteles'] = new \ItoSoftware\Base\ModelBundle\Twig\HotelesExtension();
    }
    protected function getItofrontend_Twig_VisitasService()
    {
        return $this->services['itofrontend.twig.visitas'] = new \ItoSoftware\Base\ModelBundle\Twig\VisitasExtension($this->get('session'));
    }
    protected function getIvoryGoogleMap_BoundService()
    {
        return $this->get('ivory_google_map.bound.builder')->build();
    }
    protected function getIvoryGoogleMap_Bound_BuilderService()
    {
        return $this->services['ivory_google_map.bound.builder'] = new \Ivory\GoogleMapBundle\Model\Base\BoundBuilder('Ivory\\GoogleMap\\Base\\Bound', $this->get('ivory_google_map.coordinate.builder'));
    }
    protected function getIvoryGoogleMap_BusinessAccountService()
    {
        return $this->services['ivory_google_map.business_account'] = new \Ivory\GoogleMap\Services\BusinessAccount(NULL, NULL);
    }
    protected function getIvoryGoogleMap_CircleService()
    {
        return $this->get('ivory_google_map.circle.builder')->build();
    }
    protected function getIvoryGoogleMap_Circle_BuilderService()
    {
        $this->services['ivory_google_map.circle.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\CircleBuilder('Ivory\\GoogleMap\\Overlays\\Circle', $this->get('ivory_google_map.coordinate.builder'));
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_CoordinateService()
    {
        return $this->get('ivory_google_map.coordinate.builder')->build();
    }
    protected function getIvoryGoogleMap_Coordinate_BuilderService()
    {
        return $this->services['ivory_google_map.coordinate.builder'] = new \Ivory\GoogleMapBundle\Model\Base\CoordinateBuilder('Ivory\\GoogleMap\\Base\\Coordinate');
    }
    protected function getIvoryGoogleMap_EncodedPolylineService()
    {
        return $this->get('ivory_google_map.encoded_polyline.builder')->build();
    }
    protected function getIvoryGoogleMap_EncodedPolyline_BuilderService()
    {
        $this->services['ivory_google_map.encoded_polyline.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\EncodedPolylineBuilder('Ivory\\GoogleMap\\Overlays\\EncodedPolyline');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_EventService()
    {
        return $this->get('ivory_google_map.event.builder')->build();
    }
    protected function getIvoryGoogleMap_Event_BuilderService()
    {
        return $this->services['ivory_google_map.event.builder'] = new \Ivory\GoogleMapBundle\Model\Events\EventBuilder('Ivory\\GoogleMap\\Events\\Event');
    }
    protected function getIvoryGoogleMap_EventManagerService()
    {
        return $this->get('ivory_google_map.event_manager.builder')->build();
    }
    protected function getIvoryGoogleMap_EventManager_BuilderService()
    {
        return $this->services['ivory_google_map.event_manager.builder'] = new \Ivory\GoogleMapBundle\Model\Events\EventManagerBuilder('Ivory\\GoogleMap\\Events\\EventManager');
    }
    protected function getIvoryGoogleMap_GroundOverlayService()
    {
        return $this->get('ivory_google_map.ground_overlay.builder')->build();
    }
    protected function getIvoryGoogleMap_GroundOverlay_BuilderService()
    {
        $this->services['ivory_google_map.ground_overlay.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\GroundOverlayBuilder('Ivory\\GoogleMap\\Overlays\\GroundOverlay', $this->get('ivory_google_map.bound.builder'));
        $instance->setUrl('');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_Helper_MapService()
    {
        $a = new \Ivory\GoogleMap\Helper\MapTypeIdHelper();
        $b = new \Ivory\GoogleMap\Helper\Controls\ControlPositionHelper();
        $c = new \Ivory\GoogleMap\Helper\Overlays\AnimationHelper();
        $d = new \Ivory\GoogleMap\Helper\Overlays\MarkerHelper($c);
        $e = new \Ivory\GoogleMap\Helper\Overlays\InfoWindowHelper();
        $f = new \Ivory\GoogleMap\Helper\Overlays\MarkerCluster\DefaultMarkerClusterHelper($d, $e);
        $g = new \Ivory\GoogleMap\Helper\Overlays\MarkerCluster\JsMarkerClusterHelper($d, $e);
        $h = new \Ivory\GoogleMap\Helper\Overlays\MarkerCluster\MarkerClusterHelper(array('default' => $f, 'marker_cluster' => $g));
        return $this->services['ivory_google_map.helper.map'] = new \Ivory\GoogleMap\Helper\MapHelper($this->get('ivory_google_map.helper.coordinate'), $this->get('ivory_google_map.helper.bound'), new \Ivory\GoogleMap\Helper\Base\PointHelper(), new \Ivory\GoogleMap\Helper\Base\SizeHelper(), $a, new \Ivory\GoogleMap\Helper\Controls\MapTypeControlHelper($a, $b, new \Ivory\GoogleMap\Helper\Controls\MapTypeControlStyleHelper()), new \Ivory\GoogleMap\Helper\Controls\OverviewMapControlHelper(), new \Ivory\GoogleMap\Helper\Controls\PanControlHelper($b), new \Ivory\GoogleMap\Helper\Controls\RotateControlHelper($b), new \Ivory\GoogleMap\Helper\Controls\ScaleControlHelper($b, new \Ivory\GoogleMap\Helper\Controls\ScaleControlStyleHelper()), new \Ivory\GoogleMap\Helper\Controls\StreetViewControlHelper($b), new \Ivory\GoogleMap\Helper\Controls\ZoomControlHelper($b, new \Ivory\GoogleMap\Helper\Controls\ZoomControlStyleHelper()), $h, new \Ivory\GoogleMap\Helper\Overlays\MarkerImageHelper(), new \Ivory\GoogleMap\Helper\Overlays\MarkerShapeHelper(), $e, new \Ivory\GoogleMap\Helper\Overlays\PolylineHelper(), new \Ivory\GoogleMap\Helper\Overlays\EncodedPolylineHelper(new \Ivory\GoogleMap\Helper\Geometry\EncodingHelper()), new \Ivory\GoogleMap\Helper\Overlays\PolygonHelper(), new \Ivory\GoogleMap\Helper\Overlays\RectangleHelper(), new \Ivory\GoogleMap\Helper\Overlays\CircleHelper(), new \Ivory\GoogleMap\Helper\Overlays\GroundOverlayHelper(), new \Ivory\GoogleMap\Helper\Layers\KMLLayerHelper(), new \Ivory\GoogleMap\Helper\Events\EventManagerHelper(), array('core' => new \Ivory\GoogleMap\Helper\Extension\CoreExtensionHelper($this->get('ivory_google_map.helper.api'), $h)));
    }
    protected function getIvoryGoogleMap_InfoWindowService()
    {
        return $this->get('ivory_google_map.info_window.builder')->build();
    }
    protected function getIvoryGoogleMap_InfoWindow_BuilderService()
    {
        $this->services['ivory_google_map.info_window.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\InfoWindowBuilder('Ivory\\GoogleMap\\Overlays\\InfoWindow', $this->get('ivory_google_map.coordinate.builder'), $this->get('ivory_google_map.size.builder'));
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_KmlLayerService()
    {
        return $this->get('ivory_google_map.kml_layer.builder')->build();
    }
    protected function getIvoryGoogleMap_KmlLayer_BuilderService()
    {
        $this->services['ivory_google_map.kml_layer.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Layers\KMLLayerBuilder('Ivory\\GoogleMap\\Layers\\KMLLayer');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_MapService()
    {
        return $this->get('ivory_google_map.map.builder')->build();
    }
    protected function getIvoryGoogleMap_Map_BuilderService()
    {
        $this->services['ivory_google_map.map.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\MapBuilder('Ivory\\GoogleMap\\Map', $this->get('ivory_google_map.coordinate.builder'), $this->get('ivory_google_map.bound.builder'));
        $instance->setLibraries(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_MapTypeControlService()
    {
        return $this->get('ivory_google_map.map_type_control.builder')->build();
    }
    protected function getIvoryGoogleMap_MapTypeControl_BuilderService()
    {
        $this->services['ivory_google_map.map_type_control.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Controls\MapTypeControlBuilder('Ivory\\GoogleMap\\Controls\\MapTypeControl');
        $instance->setMapTypeIds(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_MarkerService()
    {
        return $this->get('ivory_google_map.marker.builder')->build();
    }
    protected function getIvoryGoogleMap_Marker_BuilderService()
    {
        $this->services['ivory_google_map.marker.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerBuilder('Ivory\\GoogleMap\\Overlays\\Marker', $this->get('ivory_google_map.coordinate.builder'));
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_MarkerClusterService()
    {
        return $this->get('ivory_google_map.marker_cluster.builder')->build();
    }
    protected function getIvoryGoogleMap_MarkerCluster_BuilderService()
    {
        $this->services['ivory_google_map.marker_cluster.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerClusterBuilder('Ivory\\GoogleMap\\Overlays\\MarkerCluster');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_MarkerImageService()
    {
        return $this->get('ivory_google_map.marker_image.builder')->build();
    }
    protected function getIvoryGoogleMap_MarkerImage_BuilderService()
    {
        return $this->services['ivory_google_map.marker_image.builder'] = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerImageBuilder('Ivory\\GoogleMap\\Overlays\\MarkerImage', $this->get('ivory_google_map.point.builder'), $this->get('ivory_google_map.size.builder'));
    }
    protected function getIvoryGoogleMap_MarkerShapeService()
    {
        return $this->get('ivory_google_map.marker_shape.builder')->build();
    }
    protected function getIvoryGoogleMap_MarkerShape_BuilderService()
    {
        $this->services['ivory_google_map.marker_shape.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerShapeBuilder('Ivory\\GoogleMap\\Overlays\\MarkerShape');
        $instance->setType('poly');
        $instance->setCoordinates(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_OverviewMapControlService()
    {
        return $this->get('ivory_google_map.overview_map_control.builder')->build();
    }
    protected function getIvoryGoogleMap_OverviewMapControl_BuilderService()
    {
        return $this->services['ivory_google_map.overview_map_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\OverviewMapControlBuilder('Ivory\\GoogleMap\\Controls\\OverviewMapControl');
    }
    protected function getIvoryGoogleMap_PanControlService()
    {
        return $this->get('ivory_google_map.pan_control.builder')->build();
    }
    protected function getIvoryGoogleMap_PanControl_BuilderService()
    {
        return $this->services['ivory_google_map.pan_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\PanControlBuilder('Ivory\\GoogleMap\\Controls\\PanControl');
    }
    protected function getIvoryGoogleMap_PlacesAutocomplete_Form_TypeService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ivory_google_map.places_autocomplete.form.type', 'request');
        }
        return $this->services['ivory_google_map.places_autocomplete.form.type'] = $this->scopedServices['request']['ivory_google_map.places_autocomplete.form.type'] = new \Ivory\GoogleMapBundle\Form\Type\PlacesAutocompleteType($this->get('ivory_google_map.places_autocomplete.helper'), $this->get('request'));
    }
    protected function getIvoryGoogleMap_PointService()
    {
        return $this->get('ivory_google_map.point.builder')->build();
    }
    protected function getIvoryGoogleMap_Point_BuilderService()
    {
        return $this->services['ivory_google_map.point.builder'] = new \Ivory\GoogleMapBundle\Model\Base\PointBuilder('Ivory\\GoogleMap\\Base\\Point');
    }
    protected function getIvoryGoogleMap_PolygonService()
    {
        return $this->get('ivory_google_map.polygon.builder')->build();
    }
    protected function getIvoryGoogleMap_Polygon_BuilderService()
    {
        $this->services['ivory_google_map.polygon.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\PolygonBuilder('Ivory\\GoogleMap\\Overlays\\Polygon');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_PolylineService()
    {
        return $this->get('ivory_google_map.polyline.builder')->build();
    }
    protected function getIvoryGoogleMap_Polyline_BuilderService()
    {
        $this->services['ivory_google_map.polyline.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\PolylineBuilder('Ivory\\GoogleMap\\Overlays\\Polyline');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_RectangleService()
    {
        return $this->get('ivory_google_map.rectangle.builder')->build();
    }
    protected function getIvoryGoogleMap_Rectangle_BuilderService()
    {
        $this->services['ivory_google_map.rectangle.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\RectangleBuilder('Ivory\\GoogleMap\\Overlays\\Rectangle', $this->get('ivory_google_map.bound.builder'));
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_RotateControlService()
    {
        return $this->get('ivory_google_map.rotate_control.builder')->build();
    }
    protected function getIvoryGoogleMap_RotateControl_BuilderService()
    {
        return $this->services['ivory_google_map.rotate_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\RotateControlBuilder('Ivory\\GoogleMap\\Controls\\RotateControl');
    }
    protected function getIvoryGoogleMap_ScaleControlService()
    {
        return $this->get('ivory_google_map.scale_control.builder')->build();
    }
    protected function getIvoryGoogleMap_ScaleControl_BuilderService()
    {
        return $this->services['ivory_google_map.scale_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\ScaleControlBuilder('Ivory\\GoogleMap\\Controls\\ScaleControl');
    }
    protected function getIvoryGoogleMap_SizeService()
    {
        return $this->get('ivory_google_map.size.builder')->build();
    }
    protected function getIvoryGoogleMap_Size_BuilderService()
    {
        return $this->services['ivory_google_map.size.builder'] = new \Ivory\GoogleMapBundle\Model\Base\SizeBuilder('Ivory\\GoogleMap\\Base\\Size');
    }
    protected function getIvoryGoogleMap_StreetViewControlService()
    {
        return $this->get('ivory_google_map.street_view_control.builder')->build();
    }
    protected function getIvoryGoogleMap_StreetViewControl_BuilderService()
    {
        return $this->services['ivory_google_map.street_view_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\StreetViewControlBuilder('Ivory\\GoogleMap\\Controls\\StreetViewControl');
    }
    protected function getIvoryGoogleMap_Template_HelperService()
    {
        return $this->services['ivory_google_map.template.helper'] = new \Ivory\GoogleMapBundle\Helper\TemplateHelper($this->get('ivory_google_map.helper.map'));
    }
    protected function getIvoryGoogleMap_ZoomControlService()
    {
        return $this->get('ivory_google_map.zoom_control.builder')->build();
    }
    protected function getIvoryGoogleMap_ZoomControl_BuilderService()
    {
        return $this->services['ivory_google_map.zoom_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\ZoomControlBuilder('Ivory\\GoogleMap\\Controls\\ZoomControl');
    }
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'Europe/Zurich');
    }
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(1 => array('sonata_user_user_id' => array('json' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'serializeObjectToId')), 'DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml'))), 2 => array('sonata_user_user_id' => array('json' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'deserializeObjectFromId')), 'DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')))));
    }
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'));
        $instance->setOptions(0);
        return $instance;
    }
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer', 'Symfony\\Bundle\\SecurityBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer', 'Symfony\\Bundle\\TwigBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer', 'Symfony\\Bundle\\MonologBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/config/serializer', 'Symfony\\Bundle\\SwiftmailerBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/config/serializer', 'Symfony\\Bundle\\AsseticBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/assetic-bundle/Symfony/Bundle/AsseticBundle/Resources/config/serializer', 'Doctrine\\Bundle\\DoctrineBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/config/serializer', 'Sensio\\Bundle\\FrameworkExtraBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sensio/framework-extra-bundle/Sensio/Bundle/FrameworkExtraBundle/Resources/config/serializer', 'ItoSoftware\\Base\\AdminBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/AdminBundle/Resources/config/serializer', 'ItoSoftware\\Base\\ModelBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/ModelBundle/Resources/config/serializer', 'Doctrine\\Bundle\\FixturesBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/doctrine/doctrine-fixtures-bundle/Doctrine/Bundle/FixturesBundle/Resources/config/serializer', 'FOS\\RestBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/config/serializer', 'SamJ\\DoctrineSluggableBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/samj/doctrine-sluggable-bundle/src/SamJ/DoctrineSluggableBundle/Resources/config/serializer', 'Sonata\\CoreBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/config/serializer', 'Sonata\\BlockBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/block-bundle/Resources/config/serializer', 'Sonata\\AdminBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/config/serializer', 'Sonata\\DoctrineORMAdminBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/config/serializer', 'Knp\\Bundle\\MenuBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/knplabs/knp-menu-bundle/Knp/Bundle/MenuBundle/Resources/config/serializer', 'FOS\\UserBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/serializer', 'Sonata\\EasyExtendsBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/easy-extends-bundle/Resources/config/serializer', 'Sonata\\UserBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/config/serializer', 'ItoSoftware\\Base\\UserBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/UserBundle/Resources/config/serializer', 'WebApp\\AdminBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/AdminBundle/Resources/config/serializer', 'WebApp\\ModeloBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/ModeloBundle/Resources/config/serializer', 'ItoSoftware\\Base\\ToolBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/ToolBundle/Resources/config/serializer', 'WebApp\\FrontendBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/FrontendBundle/Resources/config/serializer', 'Nelmio\\ApiDocBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/config/serializer', 'JMS\\SerializerBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer', 'WebApp\\ApiBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/ApiBundle/Resources/config/serializer', 'Ivory\\GoogleMapBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/egeloen/google-map-bundle/Resources/config/serializer', 'Lexik\\Bundle\\FormFilterBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/lexik/form-filter-bundle/Lexik/Bundle/FormFilterBundle/Resources/config/serializer', 'Knp\\Bundle\\PaginatorBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/knplabs/knp-paginator-bundle/Knp/Bundle/PaginatorBundle/Resources/config/serializer', 'Stfalcon\\Bundle\\TinymceBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/config/serializer', 'Genemu\\Bundle\\FormBundle' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/config/serializer'));
        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('fos_rest.serializer'));
    }
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
        $instance->setDoctypeWhitelist(array());
        return $instance;
    }
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('router'));
    }
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', array());
    }
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }
    protected function getKnpPaginatorService()
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($this->get('event_dispatcher'));
        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));
        return $instance;
    }
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor($this->get('templating.helper.router'), $this->get('translator.default'));
    }
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'WebAppFrontendBundle:Pagination:sliding.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => 'KnpPaginatorBundle:Pagination:filtration.html.twig', 'defaultPageRange' => 5));
    }
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }
    protected function getKnpPaginator_Templating_Helper_PaginationService()
    {
        return $this->services['knp_paginator.templating.helper.pagination'] = new \Knp\Bundle\PaginatorBundle\Templating\PaginationHelper($this->get('knp_paginator.helper.processor'), $this->get('templating.engine.php'));
    }
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension($this->get('knp_paginator.helper.processor'));
    }
    protected function getLexikFormFilter_DataExtractionMethod_DefaultService()
    {
        return $this->services['lexik_form_filter.data_extraction_method.default'] = new \Lexik\Bundle\FormFilterBundle\Filter\DataExtractor\Method\DefaultExtractionMethod();
    }
    protected function getLexikFormFilter_DataExtractionMethod_KeyValuesService()
    {
        return $this->services['lexik_form_filter.data_extraction_method.key_values'] = new \Lexik\Bundle\FormFilterBundle\Filter\DataExtractor\Method\ValueKeysExtractionMethod();
    }
    protected function getLexikFormFilter_DataExtractionMethod_TextService()
    {
        return $this->services['lexik_form_filter.data_extraction_method.text'] = new \Lexik\Bundle\FormFilterBundle\Filter\DataExtractor\Method\TextExtractionMethod();
    }
    protected function getLexikFormFilter_DoctrineSubscriberService()
    {
        return $this->services['lexik_form_filter.doctrine_subscriber'] = new \Lexik\Bundle\FormFilterBundle\Event\Subscriber\DoctrineSubscriber();
    }
    protected function getLexikFormFilter_FilterPrepareService()
    {
        return $this->services['lexik_form_filter.filter_prepare'] = new \Lexik\Bundle\FormFilterBundle\Event\Listener\PrepareListener();
    }
    protected function getLexikFormFilter_FormDataExtractorService()
    {
        $this->services['lexik_form_filter.form_data_extractor'] = $instance = new \Lexik\Bundle\FormFilterBundle\Filter\DataExtractor\FormDataExtractor();
        $instance->addMethod($this->get('lexik_form_filter.data_extraction_method.default'));
        $instance->addMethod($this->get('lexik_form_filter.data_extraction_method.text'));
        $instance->addMethod($this->get('lexik_form_filter.data_extraction_method.key_values'));
        return $instance;
    }
    protected function getLexikFormFilter_QueryBuilderUpdaterService()
    {
        return $this->services['lexik_form_filter.query_builder_updater'] = new \Lexik\Bundle\FormFilterBundle\Filter\FilterBuilderUpdater($this->get('lexik_form_filter.form_data_extractor'), $this->get('event_dispatcher'));
    }
    protected function getLexikFormFilter_Type_FilterService()
    {
        return $this->services['lexik_form_filter.type.filter'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\FilterType();
    }
    protected function getLexikFormFilter_Type_FilterBooleanService()
    {
        return $this->services['lexik_form_filter.type.filter_boolean'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\BooleanFilterType();
    }
    protected function getLexikFormFilter_Type_FilterCheckboxService()
    {
        return $this->services['lexik_form_filter.type.filter_checkbox'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\CheckboxFilterType();
    }
    protected function getLexikFormFilter_Type_FilterChoiceService()
    {
        return $this->services['lexik_form_filter.type.filter_choice'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\ChoiceFilterType();
    }
    protected function getLexikFormFilter_Type_FilterDateService()
    {
        return $this->services['lexik_form_filter.type.filter_date'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\DateFilterType();
    }
    protected function getLexikFormFilter_Type_FilterDateRangeService()
    {
        return $this->services['lexik_form_filter.type.filter_date_range'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\DateRangeFilterType();
    }
    protected function getLexikFormFilter_Type_FilterDatetimeService()
    {
        return $this->services['lexik_form_filter.type.filter_datetime'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\DateTimeFilterType();
    }
    protected function getLexikFormFilter_Type_FilterDatetimeRangeService()
    {
        return $this->services['lexik_form_filter.type.filter_datetime_range'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\DateTimeRangeFilterType();
    }
    protected function getLexikFormFilter_Type_FilterEntityService()
    {
        return $this->services['lexik_form_filter.type.filter_entity'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\EntityFilterType($this->get('doctrine'));
    }
    protected function getLexikFormFilter_Type_FilterFieldService()
    {
        return $this->services['lexik_form_filter.type.filter_field'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\FieldFilterType();
    }
    protected function getLexikFormFilter_Type_FilterNumberService()
    {
        return $this->services['lexik_form_filter.type.filter_number'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\NumberFilterType();
    }
    protected function getLexikFormFilter_Type_FilterNumberRangeService()
    {
        return $this->services['lexik_form_filter.type.filter_number_range'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\NumberRangeFilterType();
    }
    protected function getLexikFormFilter_Type_FilterTextService()
    {
        return $this->services['lexik_form_filter.type.filter_text'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\Type\TextFilterType();
    }
    protected function getLexikFormFilter_TypeExtension_FilterExtensionService()
    {
        return $this->services['lexik_form_filter.type_extension.filter_extension'] = new \Lexik\Bundle\FormFilterBundle\Filter\Extension\FilterTypeExtension();
    }
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('es', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getLogoutAdminHandlerService()
    {
        return $this->services['logout_admin_handler'] = new \ItoSoftware\Base\UserBundle\Handler\LogoutHandler($this->get('router'));
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/logs/prod.log', 100, true);
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getNelmioApiDoc_DocCommentExtractorService()
    {
        return $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor();
    }
    protected function getNelmioApiDoc_EventListener_RequestService()
    {
        return $this->services['nelmio_api_doc.event_listener.request'] = new \Nelmio\ApiDocBundle\EventListener\RequestListener($this->get('nelmio_api_doc.extractor.api_doc_extractor'), $this->get('nelmio_api_doc.formatter.html_formatter'), '_doc');
    }
    protected function getNelmioApiDoc_Extractor_ApiDocExtractorService()
    {
        $a = $this->get('nelmio_api_doc.doc_comment_extractor');
        $this->services['nelmio_api_doc.extractor.api_doc_extractor'] = $instance = new \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor($this, $this->get('router'), $this->get('annotation_reader'), $a, array(0 => new \Nelmio\ApiDocBundle\Extractor\Handler\FosRestHandler(), 1 => new \Nelmio\ApiDocBundle\Extractor\Handler\JmsSecurityExtraHandler(), 2 => new \Nelmio\ApiDocBundle\Extractor\Handler\SensioFrameworkExtraHandler(), 3 => new \Nelmio\ApiDocBundle\Extractor\Handler\PhpDocHandler($a)));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_type_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.validation_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.jms_metadata_parser'));
        return $instance;
    }
    protected function getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService()
    {
        return $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension();
    }
    protected function getNelmioApiDoc_Formatter_AbstractFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.abstract_formatter'] = new \Nelmio\ApiDocBundle\Formatter\AbstractFormatter();
    }
    protected function getNelmioApiDoc_Formatter_HtmlFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.html_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\HtmlFormatter();
        $instance->setTemplatingEngine($this->get('templating'));
        $instance->setMotdTemplate('NelmioApiDocBundle::Components/motd.html.twig');
        $instance->setApiName('API documentation');
        $instance->setEnableSandbox(true);
        $instance->setEndpoint(NULL);
        $instance->setRequestFormatMethod('format_param');
        $instance->setRequestFormats(array('json' => 'application/json', 'xml' => 'application/xml'));
        $instance->setDefaultRequestFormat('json');
        $instance->setAcceptType(NULL);
        $instance->setBodyFormats(array(0 => 'form', 1 => 'json'));
        $instance->setDefaultBodyFormat('form');
        $instance->setAuthentication(NULL);
        return $instance;
    }
    protected function getNelmioApiDoc_Formatter_MarkdownFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.markdown_formatter'] = new \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter();
    }
    protected function getNelmioApiDoc_Formatter_SimpleFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.simple_formatter'] = new \Nelmio\ApiDocBundle\Formatter\SimpleFormatter();
    }
    protected function getNelmioApiDoc_Parser_FormTypeParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_type_parser'] = new \Nelmio\ApiDocBundle\Parser\FormTypeParser($this->get('form.factory'));
    }
    protected function getNelmioApiDoc_Parser_JmsMetadataParserService()
    {
        return $this->services['nelmio_api_doc.parser.jms_metadata_parser'] = new \Nelmio\ApiDocBundle\Parser\JmsMetadataParser($this->get('jms_serializer.metadata_factory'), $this->get('jms_serializer.naming_strategy'), $this->get('nelmio_api_doc.doc_comment_extractor'));
    }
    protected function getNelmioApiDoc_Parser_ValidationParserService()
    {
        return $this->services['nelmio_api_doc.parser.validation_parser'] = new \Nelmio\ApiDocBundle\Parser\ValidationParser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getNelmioApiDoc_Twig_Extension_ExtraMarkdownService()
    {
        return $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension();
    }
    protected function getPreviewService()
    {
        return $this->services['preview'] = new \ItoSoftware\Argus\FrontendBundle\Form\Extension\Type\PreviewType();
    }
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/config/routing.yml', array('cache_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');
        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);
        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('fos_rest.routing.loader.controller'));
        $d->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $d->addLoader($this->get('fos_rest.routing.loader.xml_collection'));
        $d->addLoader($this->get('sonata.admin.route_loader'));
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.admin' => new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('.*'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        $a = $this->get('security.context');
        $b = $this->get('security.http_utils');
        $c = $this->get('http_kernel');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, $this->get('logout_admin_handler'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/admin/logout'));
        $e->addHandler($this->get('security.logout.handler.session'));
        return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $e, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $b, 'admin', new \ItoSoftware\Base\UserBundle\Handler\AuthenticationHandler($this->get('router'), $this->get('translator.default'), $this), new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($c, $b, array('login_path' => '/admin/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $d), array('use_forward' => false, 'check_path' => '/admin/login_check', 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $d, $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '544a92cad862e', $d), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $b, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($c, $b, '/admin/login', false), NULL, NULL, $d));
    }
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('fos_user.user_provider.username_email');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.context');
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');
        $g = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $h = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $b), 'ThisTokenIsNotSoSecretChangeIt', 'main', array('lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'name' => 'REMEMBERME', 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $c);
        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($d, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $i->addHandler($this->get('security.logout.handler.session'));
        $i->addHandler($h);
        $j = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $j->setProviderKey('main');
        $k = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($d, $f, $this->get('security.authentication.session_strategy'), $a, 'main', $j, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $a, array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $c), array('use_forward' => false, 'check_path' => '/login_check', 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $c, $g, NULL);
        $k->setRememberMeServices($h);
        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $i, 3 => $k, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($d, $h, $f, $c, $g), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($d, '544a92cad862e', $c), 6 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, $this->get('security.authentication.trust_resolver'), $a, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $a, '/login', false), NULL, NULL, $c));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/secure_random.seed', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener();
    }
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');
        return $instance;
    }
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/sessions');
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/sessions', 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getSluggable_ListenerService()
    {
        return $this->services['sluggable.listener'] = new \SamJ\DoctrineSluggableBundle\Listener\SluggableListener($this->get('sluggable.slugger'));
    }
    protected function getSluggable_SluggerService()
    {
        return $this->services['sluggable.slugger'] = new \SamJ\DoctrineSluggableBundle\Slugger('-', '-');
    }
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'), true);
    }
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig'));
    }
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:base_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:base_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig'));
    }
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'), $this->get('validator'));
    }
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('event_dispatcher'));
    }
    protected function getSonata_Admin_ExporterService()
    {
        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => '', 'textarea' => '', 'text' => '', 'choice' => '', 'integer' => '', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date'));
    }
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType();
    }
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Plataforma Enlace', '/bundles/itoadmin/images/logoto.jpg', array('html5_validate' => true, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'javascripts' => array(0 => 'bundles/sonataadmin/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 2 => 'bundles/sonataadmin/vendor/bootstrap/dist/js/bootstrap.min.js', 3 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 4 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 5 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 6 => 'bundles/sonataadmin/jquery/jquery.form.js', 7 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 8 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 9 => 'bundles/sonataadmin/vendor/select2/select2.min.js', 10 => 'bundles/sonataadmin/App.js', 11 => 'bundles/sonataadmin/Admin.js'), 'stylesheets' => array(0 => 'bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonataadmin/vendor/AdminLTE/css/font-awesome.min.css', 2 => 'bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css', 4 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 5 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 6 => 'bundles/sonataadmin/vendor/select2/select2.css', 7 => 'bundles/sonataadmin/vendor/select2/select2-bootstrap.css', 8 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 9 => 'bundles/sonataadmin/css/styles.css', 10 => 'bundles/sonataadmin/css/layout.css')), array());
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'ito_admin.admin.ito_user', 1 => 'ito_admin.admin.ito_group', 2 => 'sonata.user.admin.user', 3 => 'ito_admin.admin.municipio', 4 => 'ito_admin.admin.visitas', 5 => 'ito_admin.admin.evento', 6 => 'ito_admin.admin.evento_foto', 7 => 'ito_admin.admin.comentario_evento', 8 => 'ito_admin.admin.aula_musical', 9 => 'ito_admin.admin.aula_foto', 10 => 'ito_admin.admin.comentario_aula', 11 => 'ito_admin.admin.contacto', 12 => 'ito_admin.admin.foto_slide', 13 => 'sonata.user.admin.group'));
        $instance->setAdminGroups(array('Contenido' => array('roles' => array(0 => 'ROLE_SUPER_ADMIN'), 'icon' => '<i class="fa fa-folder"></i>', 'items' => array(0 => 'ito_admin.admin.municipio', 1 => 'ito_admin.admin.visitas', 2 => 'ito_admin.admin.contacto', 3 => 'ito_admin.admin.foto_slide'), 'item_adds' => array(), 'label' => 'Contenido', 'label_catalogue' => 'SonataAdminBundle'), 'User' => array('roles' => array(0 => 'ROLE_SUPER_ADMIN'), 'label' => 'Usuarios', 'icon' => '<i class="fa fa-folder"></i>', 'items' => array(0 => 'ito_admin.admin.ito_user', 1 => 'ito_admin.admin.ito_group'), 'item_adds' => array(), 'label_catalogue' => 'SonataAdminBundle'), 'Evento' => array('roles' => array(0 => 'ROLE_SUPER_ADMIN'), 'icon' => '<i class="fa fa-folder"></i>', 'items' => array(0 => 'ito_admin.admin.evento', 1 => 'ito_admin.admin.evento_foto', 2 => 'ito_admin.admin.comentario_evento'), 'item_adds' => array(), 'label' => 'Evento', 'label_catalogue' => 'SonataAdminBundle'), 'Aula' => array('roles' => array(0 => 'ROLE_SUPER_ADMIN'), 'icon' => '<i class="fa fa-folder"></i>', 'items' => array(0 => 'ito_admin.admin.aula_musical', 1 => 'ito_admin.admin.aula_foto', 2 => 'ito_admin.admin.comentario_aula'), 'item_adds' => array(), 'label' => 'Aula', 'label_catalogue' => 'SonataAdminBundle')));
        $instance->setAdminClasses(array('ItoSoftware\\Base\\ModelBundle\\Entity\\User' => array(0 => 'sonata.user.admin.user'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group' => array(0 => 'sonata.user.admin.group'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\Municipio' => array(0 => 'ito_admin.admin.municipio'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\Visitas' => array(0 => 'ito_admin.admin.visitas'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\Evento' => array(0 => 'ito_admin.admin.evento'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\EventoFoto' => array(0 => 'ito_admin.admin.evento_foto'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' => array(0 => 'ito_admin.admin.comentario_evento'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\AulaMusical' => array(0 => 'ito_admin.admin.aula_musical'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\AulaFoto' => array(0 => 'ito_admin.admin.aula_foto'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioAula' => array(0 => 'ito_admin.admin.comentario_aula'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\Contacto' => array(0 => 'ito_admin.admin.contacto'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\FotoSlide' => array(0 => 'ito_admin.admin.foto_slide')));
        return $instance;
    }
    protected function getSonata_Admin_Route_CacheService()
    {
        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/sonata/admin', false);
    }
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp($this->get('sonata.admin.route.cache'), $this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('router'), $this->get('sonata.admin.route.cache'));
    }
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'ito_admin.admin.ito_user', 1 => 'ito_admin.admin.ito_group', 2 => 'sonata.user.admin.user', 3 => 'ito_admin.admin.municipio', 4 => 'ito_admin.admin.visitas', 5 => 'ito_admin.admin.evento', 6 => 'ito_admin.admin.evento_foto', 7 => 'ito_admin.admin.comentario_evento', 8 => 'ito_admin.admin.aula_musical', 9 => 'ito_admin.admin.aula_foto', 10 => 'ito_admin.admin.comentario_aula', 11 => 'ito_admin.admin.contacto', 12 => 'ito_admin.admin.foto_slide', 13 => 'sonata.user.admin.group'), $this);
    }
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler();
    }
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        return $this->services['sonata.admin.twig.extension'] = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\AdminBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop', 'sonata.block.service.action' => 'sonata.cache.noop', 'sonata.block.service.rss' => 'sonata.cache.noop')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(false);
    }
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', false, true);
    }
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());
        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');
        return $instance;
    }
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'));
    }
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        return $this->services['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(array('SonataBlockBundle:Block:block_container.html.twig' => 'SonataBlockBundle default template'));
    }
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service')));
    }
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.block.service.text', 2 => 'sonata.block.service.action', 3 => 'sonata.block.service.rss'));
    }
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), false);
    }
    protected function getSonata_Block_Service_ContainerService()
    {
        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', $this->get('templating'));
    }
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), array());
    }
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }
    protected function getSonata_Block_Service_TemplateService()
    {
        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', $this->get('templating'));
    }
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop', 'sonata.block.service.action' => 'sonata.cache.noop', 'sonata.block.service.rss' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('event_dispatcher'), NULL, $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL);
    }
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }
    protected function getSonata_Core_Date_MomentFormatConverterService()
    {
        return $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter();
    }
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager($this->get('session'), $this->get('translator.default'), array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'danger' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'danger' => 'danger'));
    }
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension($this->get('sonata.core.flashmessage.manager'));
    }
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        return $this->services['sonata.core.form.type.array'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        return $this->services['sonata.core.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType($this->get('sonata.core.date.moment_format_converter'));
    }
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\CoreBundle\Form\Type\DateRangeType($this->get('translator.default'));
    }
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType($this->get('sonata.core.date.moment_format_converter'));
    }
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType($this->get('translator.default'));
    }
    protected function getSonata_Core_Form_Type_EqualService()
    {
        return $this->services['sonata.core.form.type.equal'] = new \Sonata\CoreBundle\Form\Type\EqualType($this->get('translator.default'));
    }
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType($this->get('translator.default'));
    }
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();
        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        return $instance;
    }
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();
        $instance->addStatusService($this->get('sonata.core.flashmessage.manager'));
        return $instance;
    }
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(false, $this->get('translator.default'), $this->get('sonata.core.model.adapter.chain'));
    }
    protected function getSonata_EasyExtends_Doctrine_MapperService()
    {
        $this->services['sonata.easy_extends.doctrine.mapper'] = $instance = new \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper($this->get('doctrine'), array());
        $instance->addAssociation('ItoSoftware\\Base\\ModelBundle\\Entity\\User', 'mapManyToMany', array(0 => array('fieldName' => 'groups', 'targetEntity' => 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group', 'cascade' => array(), 'joinTable' => array('name' => 'fos_user_user_group', 'joinColumns' => array(0 => array('name' => 'user_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'inverseJoinColumns' => array(0 => array('name' => 'group_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE'))))));
        return $instance;
    }
    protected function getSonata_EasyExtends_Generator_BundleService()
    {
        return $this->services['sonata.easy_extends.generator.bundle'] = new \Sonata\EasyExtendsBundle\Generator\BundleGenerator();
    }
    protected function getSonata_EasyExtends_Generator_OdmService()
    {
        return $this->services['sonata.easy_extends.generator.odm'] = new \Sonata\EasyExtendsBundle\Generator\OdmGenerator();
    }
    protected function getSonata_EasyExtends_Generator_OrmService()
    {
        return $this->services['sonata.easy_extends.generator.orm'] = new \Sonata\EasyExtendsBundle\Generator\OrmGenerator();
    }
    protected function getSonata_EasyExtends_Generator_PhpcrService()
    {
        return $this->services['sonata.easy_extends.generator.phpcr'] = new \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator();
    }
    protected function getSonata_EasyExtends_Generator_SerializerService()
    {
        return $this->services['sonata.easy_extends.generator.serializer'] = new \Sonata\EasyExtendsBundle\Generator\SerializerGenerator();
    }
    protected function getSonata_User_Admin_GroupService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\GroupAdmin('sonata.user.admin.group', 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('ItoAdminBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('groups');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getSonata_User_Admin_UserService()
    {
        $instance = new \ItoSoftware\Base\AdminBundle\Admin\ItoUserAdmin('sonata.user.admin.user', 'ItoSoftware\\Base\\ModelBundle\\Entity\\User', 'SonataAdminBundle:CRUD');
        $instance->setUserManager($this->get('fos_user.user_manager'));
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('users');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'ItoAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getSonata_User_Api_Form_Type_GroupService()
    {
        return $this->services['sonata.user.api.form.type.group'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_user_api_form_group', 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group', 'sonata_api_write');
    }
    protected function getSonata_User_Api_Form_Type_UserService()
    {
        return $this->services['sonata.user.api.form.type.user'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_user_api_form_user', 'ItoSoftware\\Base\\ModelBundle\\Entity\\User', 'sonata_api_write');
    }
    protected function getSonata_User_Block_AccountService()
    {
        return $this->services['sonata.user.block.account'] = new \Sonata\UserBundle\Block\AccountBlockService('sonata.user.block.account', $this->get('templating'), $this->get('security.context'));
    }
    protected function getSonata_User_Block_MenuService()
    {
        return $this->services['sonata.user.block.menu'] = new \Sonata\UserBundle\Block\ProfileMenuBlockService('sonata.user.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('sonata.user.profile.menu_builder'));
    }
    protected function getSonata_User_Controller_Api_GroupService()
    {
        return $this->services['sonata.user.controller.api.group'] = new \Sonata\UserBundle\Controller\Api\GroupController($this->get('sonata.user.group_manager'), $this->get('form.factory'));
    }
    protected function getSonata_User_Controller_Api_UserService()
    {
        return $this->services['sonata.user.controller.api.user'] = new \Sonata\UserBundle\Controller\Api\UserController($this->get('sonata.user.user_manager'), $this->get('sonata.user.group_manager'), $this->get('form.factory'));
    }
    protected function getSonata_User_EditableRoleBuilderService()
    {
        return $this->services['sonata.user.editable_role_builder'] = new \Sonata\UserBundle\Security\EditableRolesBuilder($this->get('security.context'), $this->get('sonata.admin.pool'), array('ROLE_SUPER_ADMIN' => array(0 => 'ROLE_SUPER_ADMIN'), 'ROLE_ADMIN' => array(0 => 'ROLE_ADMIN'), 'ROLE_INGRESO' => array(0 => 'ROLE_INGRESO')));
    }
    protected function getSonata_User_Form_GenderListService()
    {
        return $this->services['sonata.user.form.gender_list'] = new \Sonata\CoreBundle\Form\Type\StatusType('ItoSoftware\\Base\\ModelBundle\\Entity\\User', 'getGenderList', 'sonata_user_gender');
    }
    protected function getSonata_User_Form_Type_SecurityRolesService()
    {
        return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType($this->get('sonata.user.editable_role_builder'));
    }
    protected function getSonata_User_GroupManagerService()
    {
        return $this->services['sonata.user.group_manager'] = new \Sonata\UserBundle\Entity\GroupManager($this->get('fos_user.entity_manager'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group');
    }
    protected function getSonata_User_Manager_UserService()
    {
        return $this->services['sonata.user.manager.user'] = new \Sonata\UserBundle\Entity\UserManagerProxy('Sonata\\UserBundle\\Entity\\User', $this->get('doctrine'), $this->get('sonata.user.user_manager'));
    }
    protected function getSonata_User_Profile_FormService()
    {
        return $this->services['sonata.user.profile.form'] = $this->get('form.factory')->createNamed('sonata_user_profile_form', 'sonata_user_profile', NULL, array('validation_groups' => array(0 => 'Profile'), 'translation_domain' => 'SonataUserBundle'));
    }
    protected function getSonata_User_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.profile.form.handler', 'request');
        }
        return $this->services['sonata.user.profile.form.handler'] = $this->scopedServices['request']['sonata.user.profile.form.handler'] = new \Sonata\UserBundle\Form\Handler\ProfileFormHandler($this->get('sonata.user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getSonata_User_Profile_Form_TypeService()
    {
        return $this->services['sonata.user.profile.form.type'] = new \Sonata\UserBundle\Form\Type\ProfileType('ItoSoftware\\Base\\ModelBundle\\Entity\\User');
    }
    protected function getSonata_User_Profile_MenuBuilderService()
    {
        return $this->services['sonata.user.profile.menu_builder'] = new \Sonata\UserBundle\Menu\ProfileMenuBuilder($this->get('knp_menu.factory'), $this->get('translator.default'), array(0 => array('route' => 'sonata_user_profile_edit', 'label' => 'link_edit_profile', 'domain' => 'SonataUserBundle', 'route_parameters' => array()), 1 => array('route' => 'sonata_user_profile_edit_authentication', 'label' => 'link_edit_authentication', 'domain' => 'SonataUserBundle', 'route_parameters' => array())), $this->get('event_dispatcher'));
    }
    protected function getSonata_User_Registration_FormService()
    {
        return $this->services['sonata.user.registration.form'] = $this->get('form.factory')->createNamed('sonata_user_registration_form', 'sonata_user_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getSonata_User_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.registration.form.handler', 'request');
        }
        return $this->services['sonata.user.registration.form.handler'] = $this->scopedServices['request']['sonata.user.registration.form.handler'] = new \Sonata\UserBundle\Form\Handler\RegistrationFormHandler($this->get('sonata.user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }
    protected function getSonata_User_Registration_Form_TypeService()
    {
        return $this->services['sonata.user.registration.form.type'] = new \Sonata\UserBundle\Form\Type\RegistrationFormType('ItoSoftware\\Base\\ModelBundle\\Entity\\User', array());
    }
    protected function getSonata_User_Serializer_Handler_UserService()
    {
        return $this->services['sonata.user.serializer.handler.user'] = new \Sonata\UserBundle\Serializer\UserSerializerHandler($this->get('sonata.user.manager.user'));
    }
    protected function getSonata_User_Twig_GlobalService()
    {
        return $this->services['sonata.user.twig.global'] = new \Sonata\UserBundle\Twig\GlobalVariables($this);
    }
    protected function getSonata_User_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['sonata.user.user_manager'] = new \Sonata\UserBundle\Entity\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'ItoSoftware\\Base\\ModelBundle\\Entity\\User');
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this);
    }
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('soporte@ito-software.com');
        $a->setPassword('1r1r2q3t');
        $a->setAuthMode('login');
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), new \Swift_Events_SimpleEventDispatcher());
        $instance->setHost('smtp.gmail.com');
        $instance->setPort(465);
        $instance->setEncryption('ssl');
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        return $instance;
    }
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));
        return $instance;
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app', 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));
        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper(NULL);
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/translations', 'debug' => false));
        $instance->setFallbackLocales(array(0 => 'es'));
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf', 'th', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf', 'vi', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf', 'zh_TW', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ar.xlf', 'ar', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.el.xlf', 'el', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.gl.xlf', 'gl', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ua.xlf', 'ua', 'security');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/AdminBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/AdminBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/ModelBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.bg.xliff', 'bg', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ca.xliff', 'ca', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.cs.xliff', 'cs', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.de.xliff', 'de', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.en.xliff', 'en', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.es.xliff', 'es', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.eu.xliff', 'eu', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fa.xliff', 'fa', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fr.xliff', 'fr', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hr.xliff', 'hr', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hu.xliff', 'hu', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.it.xliff', 'it', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ja.xliff', 'ja', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lb.xliff', 'lb', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lt.xliff', 'lt', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.nl.xliff', 'nl', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pl.xliff', 'pl', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt.xliff', 'pt', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt_BR.xliff', 'pt_BR', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ro.xliff', 'ro', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ru.xliff', 'ru', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sk.xliff', 'sk', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sl.xliff', 'sl', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.uk.xliff', 'uk', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.zh_CN.xliff', 'zh_CN', 'SonataCoreBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.bg.xliff', 'bg', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ca.xliff', 'ca', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.cs.xliff', 'cs', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.de.xliff', 'de', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.en.xliff', 'en', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.es.xliff', 'es', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.eu.xliff', 'eu', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fa.xliff', 'fa', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fr.xliff', 'fr', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hr.xliff', 'hr', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hu.xliff', 'hu', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.it.xliff', 'it', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ja.xliff', 'ja', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lb.xliff', 'lb', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lt.xliff', 'lt', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.nl.xliff', 'nl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pl.xliff', 'pl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt.xliff', 'pt', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt_BR.xliff', 'pt_BR', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ro.xliff', 'ro', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ru.xliff', 'ru', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sk.xliff', 'sk', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sl.xliff', 'sl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.uk.xliff', 'uk', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.zh_CN.xliff', 'zh_CN', 'SonataAdminBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fa.yml', 'fa', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lt.yml', 'lt', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fa.yml', 'fa', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lt.yml', 'lt', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/FOSUserBundle.en.xliff', 'en', 'FOSUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/FOSUserBundle.fr.xliff', 'fr', 'FOSUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.bg.xliff', 'bg', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.ca.xliff', 'ca', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.cs.xliff', 'cs', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.de.xliff', 'de', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.en.xliff', 'en', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.es.xliff', 'es', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.fa.xliff', 'fa', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.fr.xliff', 'fr', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.it.xliff', 'it', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.lt.xliff', 'lt', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.nl.xliff', 'nl', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pl.xliff', 'pl', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pt.xliff', 'pt', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pt_BR.xliff', 'pt_BR', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.ru.xliff', 'ru', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.sk.xliff', 'sk', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.sl.xliff', 'sl', 'SonataUserBundle');
        $instance->addResource('xliff', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.zh_TW.xliff', 'zh_TW', 'SonataUserBundle');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/UserBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/AdminBundle/Resources/translations/messages.es.xlf', 'es', 'messages');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/ModeloBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/ToolBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/FrontendBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('xlf', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/ApiBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/lexik/form-filter-bundle/Lexik/Bundle/FormFilterBundle/Resources/translations/LexikFormFilterBundle.de.yml', 'de', 'LexikFormFilterBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/lexik/form-filter-bundle/Lexik/Bundle/FormFilterBundle/Resources/translations/LexikFormFilterBundle.en.yml', 'en', 'LexikFormFilterBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/lexik/form-filter-bundle/Lexik/Bundle/FormFilterBundle/Resources/translations/LexikFormFilterBundle.es.yml', 'es', 'LexikFormFilterBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/lexik/form-filter-bundle/Lexik/Bundle/FormFilterBundle/Resources/translations/LexikFormFilterBundle.fr.yml', 'fr', 'LexikFormFilterBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/lexik/form-filter-bundle/Lexik/Bundle/FormFilterBundle/Resources/translations/LexikFormFilterBundle.it.yml', 'it', 'LexikFormFilterBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/lexik/form-filter-bundle/Lexik/Bundle/FormFilterBundle/Resources/translations/LexikFormFilterBundle.nl.yml', 'nl', 'LexikFormFilterBundle');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/translations/validators.sl.yml', 'sl', 'validators');
        return $instance;
    }
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape_service' => NULL, 'autoescape_service_method' => NULL, 'cache' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/twig', 'charset' => 'UTF-8', 'paths' => array()));
        $instance->addExtension($this->get('twig.extension.intl'));
        $instance->addExtension($this->get('itofrontend.twig.hoteles'));
        $instance->addExtension($this->get('itofrontend.twig.visitas'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(NULL));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension($this->get('twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('sonata.core.flashmessage.twig.extension'));
        $instance->addExtension($this->get('sonata.core.twig.extension.text'));
        $instance->addExtension($this->get('sonata.core.twig.status_extension'));
        $instance->addExtension($this->get('sonata.core.twig.template_extension'));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('file_exits.twig_extension'));
        $instance->addExtension($this->get('nelmio_api_doc.twig.extension.extra_markdown'));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('fos_rest.serializer')));
        $instance->addExtension(new \Ivory\GoogleMapBundle\Twig\GoogleMapExtension($this->get('ivory_google_map.template.helper')));
        $instance->addExtension($this->get('knp_paginator.twig.extension.pagination'));
        $instance->addExtension($this->get('twig.extension.stfalcon_tinymce'));
        $instance->addExtension($this->get('genemu.twig.extension.form'));
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('project_name', 'Plataforma Enlace');
        $instance->addGlobal('web_path', '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web');
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        $instance->addGlobal('sonata_user', $this->get('sonata.user.twig.global'));
        return $instance;
    }
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }
    protected function getTwig_Extension_StfalconTinymceService()
    {
        return $this->services['twig.extension.stfalcon_tinymce'] = new \Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension($this);
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/Resources/TwigBundle/views', 'Twig');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/AdminBundle/Resources/views', 'ItoAdmin');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/ModelBundle/Resources/views', 'ItoModel');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/core-bundle/Resources/views', 'SonataCore');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/block-bundle/Resources/views', 'SonataBlock');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/admin-bundle/Resources/views', 'SonataAdmin');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views', 'SonataDoctrineORMAdmin');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/Resources/FOSUserBundle/views', 'FOSUser');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/Resources/SonataUserBundle/views', 'SonataUser');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/sonata-project/user-bundle/Resources/views', 'SonataUser');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/UserBundle/Resources/views', 'ItoUser');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/AdminBundle/Resources/views', 'WebAppAdmin');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/ModeloBundle/Resources/views', 'WebAppModelo');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/ItoSoftware/Base/ToolBundle/Resources/views', 'ItoTool');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/FrontendBundle/Resources/views', 'WebAppFrontend');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views', 'NelmioApiDoc');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/src/WebApp/ApiBundle/Resources/views', 'WebAppApi');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/egeloen/google-map-bundle/Resources/views', 'IvoryGoogleMap');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/lexik/form-filter-bundle/Lexik/Bundle/FormFilterBundle/Resources/views', 'LexikFormFilter');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/knplabs/knp-paginator-bundle/Knp/Bundle/PaginatorBundle/Resources/views', 'KnpPaginator');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/views', 'StfalconTinymce');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/genemu/form-bundle/Genemu/Bundle/FormBundle/Resources/views', 'GenemuForm');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/Resources/views');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');
        $instance->addPath('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views');
        return $instance;
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), $this->get('validator.validator_factory'), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
    }
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }
    protected function getViewImageService()
    {
        return $this->services['view_image'] = new \WebApp\FrontendBundle\Form\Extension\Type\ViewImageType();
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web', false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }
    protected function getFosUser_UserProvider_UsernameEmailService()
    {
        return $this->services['fos_user.user_provider.username_email'] = new \FOS\UserBundle\Security\EmailUserProvider($this->get('fos_user.user_manager'));
    }
    protected function getIvoryGoogleMap_Helper_ApiService()
    {
        return $this->services['ivory_google_map.helper.api'] = new \Ivory\GoogleMap\Helper\ApiHelper();
    }
    protected function getIvoryGoogleMap_Helper_BoundService()
    {
        return $this->services['ivory_google_map.helper.bound'] = new \Ivory\GoogleMap\Helper\Base\BoundHelper($this->get('ivory_google_map.helper.coordinate'));
    }
    protected function getIvoryGoogleMap_Helper_CoordinateService()
    {
        return $this->services['ivory_google_map.helper.coordinate'] = new \Ivory\GoogleMap\Helper\Base\CoordinateHelper();
    }
    protected function getIvoryGoogleMap_PlacesAutocomplete_HelperService()
    {
        return $this->services['ivory_google_map.places_autocomplete.helper'] = new \Ivory\GoogleMap\Helper\Places\AutocompleteHelper($this->get('ivory_google_map.helper.api'), $this->get('ivory_google_map.helper.coordinate'), $this->get('ivory_google_map.helper.bound'));
    }
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->services['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $instance->setCache(new \Metadata\Cache\FileCache('/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/jms_serializer'));
        return $instance;
    }
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');
        $b = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_SUPER_ADMIN' => array(0 => 'ROLE_SUPER_ADMIN'), 'ROLE_ADMIN' => array(0 => 'ROLE_ADMIN'), 'ROLE_INGRESO' => array(0 => 'ROLE_INGRESO')));
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a)), 'affirmative', false, true);
    }
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logout$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login_check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/'), array(0 => 'ROLE_SUPER_ADMIN', 1 => 'ROLE_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        return $instance;
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_provider.username_email');
        $b = $this->get('security.user_checker');
        $c = $this->get('security.encoder_factory');
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'admin', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('544a92cad862e'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($b, 'ThisTokenIsNotSoSecretChangeIt', 'main'), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('544a92cad862e')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_ContextListener_0Service()
    {
        return $this->services['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener($this->get('security.context'), array(0 => $this->get('fos_user.user_provider.username_email')), 'user', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, false, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array(0 => 'symfony_web_app'));
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array(0 => 'symfony_web_app'));
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array());
        $instance->add('sonata.user.block.menu', 'sonata.user.block.menu', array());
        $instance->add('sonata.user.block.account', 'sonata.user.block.account', array());
        return $instance;
    }
    protected function getTemplating_Engine_PhpService()
    {
        $this->services['templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static', 'sonata_block' => 'sonata.block.templating.helper', 'jms_serializer' => 'jms_serializer.templating.helper.serializer', 'ivory_google_map' => 'ivory_google_map.template.helper', 'knp_pagination' => 'knp_paginator.templating.helper.pagination'));
        return $instance;
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod');
    }
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'WebAppFrontendBundle:Form:fields.html.twig', 2 => 'LexikFormFilterBundle:Form:form_div_layout.html.twig', 3 => 'SonataUserBundle:Form:form_admin_fields.html.twig', 4 => 'IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig', 5 => 'GenemuFormBundle:Form:div_layout.html.twig', 6 => 'GenemuFormBundle:Form:jquery_layout.html.twig', 7 => 'GenemuFormBundle:Form:stylesheet_layout.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml', 1 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml', 2 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline'));
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod',
            'kernel.logs_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'ItoAdminBundle' => 'ItoSoftware\\Base\\AdminBundle\\ItoAdminBundle',
                'ItoModelBundle' => 'ItoSoftware\\Base\\ModelBundle\\ItoModelBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'SamJDoctrineSluggableBundle' => 'SamJ\\DoctrineSluggableBundle\\SamJDoctrineSluggableBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'ItoUserBundle' => 'ItoSoftware\\Base\\UserBundle\\ItoUserBundle',
                'WebAppAdminBundle' => 'WebApp\\AdminBundle\\WebAppAdminBundle',
                'WebAppModeloBundle' => 'WebApp\\ModeloBundle\\WebAppModeloBundle',
                'ItoToolBundle' => 'ItoSoftware\\Base\\ToolBundle\\ItoToolBundle',
                'WebAppFrontendBundle' => 'WebApp\\FrontendBundle\\WebAppFrontendBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'WebAppApiBundle' => 'WebApp\\ApiBundle\\WebAppApiBundle',
                'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\IvoryGoogleMapBundle',
                'LexikFormFilterBundle' => 'Lexik\\Bundle\\FormFilterBundle\\LexikFormFilterBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'StfalconTinymceBundle' => 'Stfalcon\\Bundle\\TinymceBundle\\StfalconTinymceBundle',
                'GenemuFormBundle' => 'Genemu\\Bundle\\FormBundle\\GenemuFormBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => 'localhost',
            'database_port' => NULL,
            'database_name' => 'plataforma',
            'database_user' => 'root',
            'database_password' => 14142135,
            'mailer_transport' => 'smtp',
            'mailer_host' => 'smtp.gmail.com',
            'mailer_user' => 'soporte@ito-software.com',
            'mailer_password' => '1r1r2q3t',
            'locale' => 'es',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'sonata.user.admin.groupname' => 'Users',
            'project_name' => 'Plataforma Enlace',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(
            ),
            'kernel.trusted_proxies' => array(
            ),
            'kernel.default_locale' => 'es',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
            ),
            'session.save_path' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/sessions',
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.helper.stopwatch.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
                1 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml',
                2 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.translation_domain' => 'validators',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'data_collector.templates' => array(
            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdUrlMatcher',
            'router.options.generator.cache_class' => 'appProdUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/config/routing.yml',
            'router.cache_class_prefix' => 'appProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_SUPER_ADMIN',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
                'ROLE_INGRESO' => array(
                    0 => 'ROLE_INGRESO',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'WebAppFrontendBundle:Form:fields.html.twig',
                2 => 'LexikFormFilterBundle:Form:form_div_layout.html.twig',
                3 => 'SonataUserBundle:Form:form_admin_fields.html.twig',
                4 => 'IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig',
                5 => 'GenemuFormBundle:Form:div_layout.html.twig',
                6 => 'GenemuFormBundle:Form:jquery_layout.html.twig',
                7 => 'GenemuFormBundle:Form:stylesheet_layout.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape_service' => NULL,
                'autoescape_service_method' => NULL,
                'cache' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/twig',
                'charset' => 'UTF-8',
                'paths' => array(
                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => 'ssl',
            'swiftmailer.mailer.default.transport.smtp.port' => 465,
            'swiftmailer.mailer.default.transport.smtp.host' => 'smtp.gmail.com',
            'swiftmailer.mailer.default.transport.smtp.username' => 'soporte@ito-software.com',
            'swiftmailer.mailer.default.transport.smtp.password' => '1r1r2q3t',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => 'login',
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/assetic',
            'assetic.bundles' => array(
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web',
            'assetic.write_to' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web',
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'json' => array(
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view.exception_wrapper_handler' => 'FOS\\RestBundle\\View\\ExceptionWrapperHandler',
            'fos_rest.view_handler.default.class' => 'FOS\\RestBundle\\View\\ViewHandler',
            'fos_rest.view_handler.jsonp.class' => 'FOS\\RestBundle\\View\\JsonpHandler',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Util\\Inflector\\DoctrineInflector',
            'fos_rest.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_rest.violation_formatter.class' => 'FOS\\RestBundle\\Util\\ViolationFormatter',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/cache/prod/fos_rest',
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.formats' => array(
                'json' => false,
                'html' => true,
            ),
            'fos_rest.default_engine' => 'twig',
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.view_response_listener.class' => 'FOS\\RestBundle\\EventListener\\ViewResponseListener',
            'fos_rest.view_response_listener.force_view' => true,
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.routing.loader.include_format' => true,
            'fos_rest.exception.codes' => array(
            ),
            'fos_rest.exception.messages' => array(
            ),
            'fos_rest.normalizer.camel_keys.class' => 'FOS\\RestBundle\\Normalizer\\CamelKeysNormalizer',
            'fos_rest.decoder.json.class' => 'FOS\\RestBundle\\Decoder\\JsonDecoder',
            'fos_rest.decoder.jsontoform.class' => 'FOS\\RestBundle\\Decoder\\JsonToFormDecoder',
            'fos_rest.decoder.xml.class' => 'FOS\\RestBundle\\Decoder\\XmlDecoder',
            'fos_rest.decoder_provider.class' => 'FOS\\RestBundle\\Decoder\\ContainerDecoderProvider',
            'fos_rest.body_listener.class' => 'FOS\\RestBundle\\EventListener\\BodyListener',
            'fos_rest.throw_exception_on_unsupported_content_type' => false,
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
            ),
            'fos_rest.format_listener.class' => 'FOS\\RestBundle\\EventListener\\FormatListener',
            'fos_rest.version_listener.class' => 'FOS\\RestBundle\\EventListener\\VersionListener',
            'fos_rest.format_listener.rules' => array(
                'prefer_extension' => array(
                    'path' => NULL,
                    'host' => NULL,
                    'methods' => NULL,
                    'prefer_extension' => true,
                    'fallback_format' => 'html',
                    'priorities' => array(
                    ),
                ),
            ),
            'fos_rest.mime_types' => array(
            ),
            'fos_rest.param_fetcher_listener.class' => 'FOS\\RestBundle\\EventListener\\ParamFetcherListener',
            'fos_rest.param_fetcher_listener.set_params_as_attributes' => false,
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'sluggable.slugger.word_separator' => '-',
            'sluggable.slugger.field_separator' => '-',
            'sluggable.slugger.class' => 'SamJ\\DoctrineSluggableBundle\\Slugger',
            'sluggable.sluggablelistener.class' => 'SamJ\\DoctrineSluggableBundle\\Listener\\SluggableListener',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'cmf.block.container',
                3 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.block.service.text' => array(
                    'contexts' => array(
                        0 => 'symfony_web_app',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.block.service.action' => array(
                    'contexts' => array(
                        0 => 'symfony_web_app',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.block.service.rss' => array(
                    'contexts' => array(
                        0 => 'symfony_web_app',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(
            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.block.service.action' => 'sonata.cache.noop',
                    'sonata.block.service.rss' => 'sonata.cache.noop',
                ),
            ),
            'sonata.admin.configuration.templates' => array(
                'user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig',
                'layout' => 'ItoAdminBundle:Sonata:standard_layout.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'list_block' => 'WebAppAdminBundle:Sonata:Block/block_admin_list.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'show' => 'ItoAdminBundle:CRUD:show.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html',
                'add_block' => 'SonataAdminBundle:Core:add_block.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(
            ),
            'sonata.admin.configuration.dashboard_groups' => array(
                'Contenido' => array(
                    'roles' => array(
                        0 => 'ROLE_SUPER_ADMIN',
                    ),
                    'icon' => '<i class="fa fa-folder"></i>',
                    'items' => array(
                    ),
                    'item_adds' => array(
                    ),
                ),
                'User' => array(
                    'roles' => array(
                        0 => 'ROLE_SUPER_ADMIN',
                    ),
                    'label' => 'Usuarios',
                    'icon' => '<i class="fa fa-folder"></i>',
                    'items' => array(
                    ),
                    'item_adds' => array(
                    ),
                ),
                'Evento' => array(
                    'roles' => array(
                        0 => 'ROLE_SUPER_ADMIN',
                    ),
                    'icon' => '<i class="fa fa-folder"></i>',
                    'items' => array(
                    ),
                    'item_adds' => array(
                    ),
                ),
                'Aula' => array(
                    'roles' => array(
                        0 => 'ROLE_SUPER_ADMIN',
                    ),
                    'icon' => '<i class="fa fa-folder"></i>',
                    'items' => array(
                    ),
                    'item_adds' => array(
                    ),
                ),
            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'type' => 'sonata.admin.block.admin_list',
                    'settings' => array(
                        'groups' => array(
                            0 => 'User',
                            1 => 'Contenido',
                            2 => 'Evento',
                            3 => 'Aula',
                        ),
                    ),
                    'class' => 'col-md-4',
                ),
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(
            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(
                ),
                'excludes' => array(
                ),
                'implements' => array(
                ),
                'extends' => array(
                ),
                'instanceof' => array(
                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:base_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:base_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(
            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(
            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'ItoSoftware\\Base\\ModelBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'fos_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'sonata.user.admin.user.class' => 'ItoSoftware\\Base\\AdminBundle\\Admin\\ItoUserAdmin',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'ItoSoftware\\Base\\ModelBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'ItoSoftware\\Base\\ModelBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'ItoAdminBundle',
            'sonata.user.admin.user.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.impersonating' => array(
                'route' => 'page_slug',
                'parameters' => array(
                    'path' => '/',
                ),
            ),
            'sonata.user.google.authenticator.enabled' => false,
            'sonata.user.profile.form.type' => 'sonata_user_profile',
            'sonata.user.profile.form.name' => 'sonata_user_profile_form',
            'sonata.user.profile.form.validation_groups' => array(
                0 => 'Profile',
            ),
            'sonata.user.register.confirm.redirect_route' => 'sonata_user_profile_show',
            'sonata.user.register.confirm.redirect_route_params' => array(
            ),
            'sonata.user.configuration.profile_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(
                        'content' => '<h2>Welcome!</h2> This is a sample user profile dashboard, feel free to override it in the configuration!',
                    ),
                    'type' => 'sonata.block.service.text',
                ),
            ),
            'sonata.user.registration.form.options' => array(
            ),
            'sonata.user.registration.form.type' => 'sonata_user_registration',
            'sonata.user.registration.form.name' => 'sonata_user_registration_form',
            'sonata.user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig',
            'nelmio_api_doc.exclude_sections' => array(
            ),
            'nelmio_api_doc.api_name' => 'API documentation',
            'nelmio_api_doc.sandbox.enabled' => true,
            'nelmio_api_doc.sandbox.endpoint' => NULL,
            'nelmio_api_doc.sandbox.accept_type' => NULL,
            'nelmio_api_doc.sandbox.body_format.formats' => array(
                0 => 'form',
                1 => 'json',
            ),
            'nelmio_api_doc.sandbox.body_format.default_format' => 'form',
            'nelmio_api_doc.sandbox.request_format.method' => 'format_param',
            'nelmio_api_doc.sandbox.request_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.formats' => array(
                'json' => 'application/json',
                'xml' => 'application/xml',
            ),
            'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter',
            'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter',
            'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter',
            'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter',
            'nelmio_api_doc.sandbox.authentication' => NULL,
            'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor',
            'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension',
            'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension',
            'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor',
            'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler',
            'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler',
            'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler',
            'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler',
            'nelmio_api_doc.request_listener.parameter' => '_doc',
            'nelmio_api_doc.event_listener.request.class' => 'Nelmio\\ApiDocBundle\\EventListener\\RequestListener',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(
            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'ivory_google_map.helper.api.class' => 'Ivory\\GoogleMap\\Helper\\ApiHelper',
            'ivory_google_map.coordinate.class' => 'Ivory\\GoogleMap\\Base\\Coordinate',
            'ivory_google_map.coordinate.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\CoordinateBuilder',
            'ivory_google_map.coordinate.helper.class' => 'Ivory\\GoogleMap\\Helper\\Base\\CoordinateHelper',
            'ivory_google_map.bound.class' => 'Ivory\\GoogleMap\\Base\\Bound',
            'ivory_google_map.bound.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\BoundBuilder',
            'ivory_google_map.bound.helper.class' => 'Ivory\\GoogleMap\\Helper\\Base\\BoundHelper',
            'ivory_google_map.point.class' => 'Ivory\\GoogleMap\\Base\\Point',
            'ivory_google_map.point.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\PointBuilder',
            'ivory_google_map.point.helper.class' => 'Ivory\\GoogleMap\\Helper\\Base\\PointHelper',
            'ivory_google_map.size.class' => 'Ivory\\GoogleMap\\Base\\Size',
            'ivory_google_map.size.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\SizeBuilder',
            'ivory_google_map.size.helper.class' => 'Ivory\\GoogleMap\\Helper\\Base\\SizeHelper',
            'ivory_google_map.business_account.class' => 'Ivory\\GoogleMap\\Services\\BusinessAccount',
            'ivory_google_map.map_type_control.class' => 'Ivory\\GoogleMap\\Controls\\MapTypeControl',
            'ivory_google_map.map_type_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\MapTypeControlBuilder',
            'ivory_google_map.map_type_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\MapTypeControlHelper',
            'ivory_google_map.overview_map_control.class' => 'Ivory\\GoogleMap\\Controls\\OverviewMapControl',
            'ivory_google_map.overview_map_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\OverviewMapControlBuilder',
            'ivory_google_map.overview_map_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\OverviewMapControlHelper',
            'ivory_google_map.pan_control.class' => 'Ivory\\GoogleMap\\Controls\\PanControl',
            'ivory_google_map.pan_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\PanControlBuilder',
            'ivory_google_map.pan_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\PanControlHelper',
            'ivory_google_map.rotate_control.class' => 'Ivory\\GoogleMap\\Controls\\RotateControl',
            'ivory_google_map.rotate_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\RotateControlBuilder',
            'ivory_google_map.rotate_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\RotateControlHelper',
            'ivory_google_map.scale_control.class' => 'Ivory\\GoogleMap\\Controls\\ScaleControl',
            'ivory_google_map.scale_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\ScaleControlBuilder',
            'ivory_google_map.scale_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ScaleControlHelper',
            'ivory_google_map.street_view_control.class' => 'Ivory\\GoogleMap\\Controls\\StreetViewControl',
            'ivory_google_map.street_view_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\StreetViewControlBuilder',
            'ivory_google_map.street_view_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\StreetViewControlHelper',
            'ivory_google_map.zoom_control.class' => 'Ivory\\GoogleMap\\Controls\\ZoomControl',
            'ivory_google_map.zoom_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\ZoomControlBuilder',
            'ivory_google_map.zoom_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ZoomControlHelper',
            'ivory_google_map.control_position.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ControlPositionHelper',
            'ivory_google_map.map_type_control_style.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\MapTypeControlStyleHelper',
            'ivory_google_map.scale_control_style.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ScaleControlStyleHelper',
            'ivory_google_map.zoom_control_style.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ZoomControlStyleHelper',
            'ivory_google_map.event_manager.class' => 'Ivory\\GoogleMap\\Events\\EventManager',
            'ivory_google_map.event_manager.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Events\\EventManagerBuilder',
            'ivory_google_map.event_manager.helper.class' => 'Ivory\\GoogleMap\\Helper\\Events\\EventManagerHelper',
            'ivory_google_map.event.class' => 'Ivory\\GoogleMap\\Events\\Event',
            'ivory_google_map.event.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Events\\EventBuilder',
            'ivory_google_map.helper.extension.core.class' => 'Ivory\\GoogleMap\\Helper\\Extension\\CoreExtensionHelper',
            'ivory_google_map.helper.extension.info_box.class' => 'Ivory\\GoogleMap\\Helper\\Extension\\InfoBoxExtensionHelper',
            'ivory_google_map.template.helper.class' => 'Ivory\\GoogleMapBundle\\Helper\\TemplateHelper',
            'ivory_google_map.kml_layer.class' => 'Ivory\\GoogleMap\\Layers\\KMLLayer',
            'ivory_google_map.kml_layer.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Layers\\KMLLayerBuilder',
            'ivory_google_map.kml_layer.helper.class' => 'Ivory\\GoogleMap\\Helper\\Layers\\KMLLayerHelper',
            'ivory_google_map.map.class' => 'Ivory\\GoogleMap\\Map',
            'ivory_google_map.map.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\MapBuilder',
            'ivory_google_map.map.helper.class' => 'Ivory\\GoogleMap\\Helper\\MapHelper',
            'ivory_google_map.map_type_id.helper.class' => 'Ivory\\GoogleMap\\Helper\\MapTypeIdHelper',
            'ivory_google_map.animation.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\AnimationHelper',
            'ivory_google_map.circle.class' => 'Ivory\\GoogleMap\\Overlays\\Circle',
            'ivory_google_map.circle.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\CircleBuilder',
            'ivory_google_map.circle.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\CircleHelper',
            'ivory_google_map.encoded_polyline.class' => 'Ivory\\GoogleMap\\Overlays\\EncodedPolyline',
            'ivory_google_map.encoded_polyline.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\EncodedPolylineBuilder',
            'ivory_google_map.encoded_polyline.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\EncodedPolylineHelper',
            'ivory_google_map.encoding.helper.class' => 'Ivory\\GoogleMap\\Helper\\Geometry\\EncodingHelper',
            'ivory_google_map.ground_overlay.class' => 'Ivory\\GoogleMap\\Overlays\\GroundOverlay',
            'ivory_google_map.ground_overlay.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\GroundOverlayBuilder',
            'ivory_google_map.ground_overlay.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\GroundOverlayHelper',
            'ivory_google_map.info_window.class' => 'Ivory\\GoogleMap\\Overlays\\InfoWindow',
            'ivory_google_map.info_window.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\InfoWindowBuilder',
            'ivory_google_map.info_window.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\InfoWindowHelper',
            'ivory_google_map.marker_cluster.class' => 'Ivory\\GoogleMap\\Overlays\\MarkerCluster',
            'ivory_google_map.marker_cluster.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerClusterBuilder',
            'ivory_google_map.marker_cluster.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerCluster\\MarkerClusterHelper',
            'ivory_google_map.marker_cluster.helper.abstract.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerCluster\\AbstractMarkerClusterHelper',
            'ivory_google_map.marker_cluster.helper.default.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerCluster\\DefaultMarkerClusterHelper',
            'ivory_google_map.marker_cluster.helper.js.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerCluster\\JsMarkerClusterHelper',
            'ivory_google_map.marker.class' => 'Ivory\\GoogleMap\\Overlays\\Marker',
            'ivory_google_map.marker.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerBuilder',
            'ivory_google_map.marker.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerHelper',
            'ivory_google_map.marker_image.class' => 'Ivory\\GoogleMap\\Overlays\\MarkerImage',
            'ivory_google_map.marker_image.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerImageBuilder',
            'ivory_google_map.marker_image.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerImageHelper',
            'ivory_google_map.marker_shape.class' => 'Ivory\\GoogleMap\\Overlays\\MarkerShape',
            'ivory_google_map.marker_shape.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerShapeBuilder',
            'ivory_google_map.marker_shape.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerShapeHelper',
            'ivory_google_map.polygon.class' => 'Ivory\\GoogleMap\\Overlays\\Polygon',
            'ivory_google_map.polygon.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\PolygonBuilder',
            'ivory_google_map.polygon.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\PolygonHelper',
            'ivory_google_map.polyline.class' => 'Ivory\\GoogleMap\\Overlays\\Polyline',
            'ivory_google_map.polyline.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\PolylineBuilder',
            'ivory_google_map.polyline.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\PolylineHelper',
            'ivory_google_map.rectangle.class' => 'Ivory\\GoogleMap\\Overlays\\Rectangle',
            'ivory_google_map.rectangle.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\RectangleBuilder',
            'ivory_google_map.rectangle.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\RectangleHelper',
            'ivory_google_map.places_autocomplete.form.type.class' => 'Ivory\\GoogleMapBundle\\Form\\Type\\PlacesAutocompleteType',
            'ivory_google_map.places_autocomplete.helper.class' => 'Ivory\\GoogleMap\\Helper\\Places\\AutocompleteHelper',
            'ivory_google_map.twig.extension.class' => 'Ivory\\GoogleMapBundle\\Twig\\GoogleMapExtension',
            'lexik_form_filter.query_builder_updater.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\FilterBuilderUpdater',
            'lexik_form_filter.form_data_extractor.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\DataExtractor\\FormDataExtractor',
            'lexik_form_filter.data_extraction_method.default.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\DataExtractor\\Method\\DefaultExtractionMethod',
            'lexik_form_filter.data_extraction_method.text.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\DataExtractor\\Method\\TextExtractionMethod',
            'lexik_form_filter.data_extraction_method.key_values.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\DataExtractor\\Method\\ValueKeysExtractionMethod',
            'lexik_form_filter.type.filter_field.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\FieldFilterType',
            'lexik_form_filter.type.filter.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\FilterType',
            'lexik_form_filter.type.filter_text.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\TextFilterType',
            'lexik_form_filter.type.filter_number.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\NumberFilterType',
            'lexik_form_filter.type.filter_number_range.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\NumberRangeFilterType',
            'lexik_form_filter.type.filter_checkbox.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\CheckboxFilterType',
            'lexik_form_filter.type.filter_boolean.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\BooleanFilterType',
            'lexik_form_filter.type.filter_choice.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\ChoiceFilterType',
            'lexik_form_filter.type.filter_entity.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\EntityFilterType',
            'lexik_form_filter.type.filter_date.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\DateFilterType',
            'lexik_form_filter.type.filter_date_range.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\DateRangeFilterType',
            'lexik_form_filter.type.filter_datetime.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\DateTimeFilterType',
            'lexik_form_filter.type.filter_datetime_range.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\Type\\DateTimeRangeFilterType',
            'lexik_form_filter.type_extension.filter_extension.class' => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Extension\\FilterTypeExtension',
            'lexik_form_filter.filter_prepare.class' => 'Lexik\\Bundle\\FormFilterBundle\\Event\\Listener\\PrepareListener',
            'lexik_form_filter.doctrine_subscriber.class' => 'Lexik\\Bundle\\FormFilterBundle\\Event\\Subscriber\\DoctrineSubscriber',
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.templating.helper.pagination.class' => 'Knp\\Bundle\\PaginatorBundle\\Templating\\PaginationHelper',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'WebAppFrontendBundle:Pagination:sliding.html.twig',
            'knp_paginator.template.filtration' => 'KnpPaginatorBundle:Pagination:filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'stfalcon_tinymce.config' => array(
                'include_jquery' => false,
                'tinymce_jquery' => false,
                'use_callback_tinymce_init' => false,
                'selector' => '.tinymce',
                'language' => NULL,
                'theme' => array(
                    'advanced' => array(
                        'theme' => 'modern',
                        'plugins' => array(
                            0 => 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                            1 => 'searchreplace wordcount visualblocks visualchars code fullscreen',
                            2 => 'insertdatetime media nonbreaking save table contextmenu directionality',
                            3 => 'emoticons template paste textcolor',
                        ),
                        'toolbar1' => 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify
                                   | bullist numlist outdent indent | link image',
                        'toolbar2' => 'print preview media | forecolor backcolor emoticons',
                        'image_advtab' => true,
                    ),
                    'simple' => array(
                    ),
                ),
                'tinymce_buttons' => array(
                ),
                'external_plugins' => array(
                ),
            ),
            'stfalcon_tinymce.twig.extension.class' => 'Stfalcon\\Bundle\\TinymceBundle\\Twig\\Extension\\StfalconTinymceExtension',
            'genemu.form.recaptcha.public_key' => '',
            'genemu.form.recaptcha.private_key' => '',
            'genemu.form.recaptcha.server_url' => '',
            'genemu.form.recaptcha.code' => '',
            'genemu.form.recaptcha.options' => array(
            ),
            'genemu.form.recaptcha.validation.options' => array(
            ),
            'genemu.form.captcha.options' => array(
                'enabled' => true,
                'driver' => 'gd',
                'width' => 100,
                'height' => 30,
                'length' => 4,
                'format' => 'png',
                'chars' => array(
                    0 => 0,
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5,
                    6 => 6,
                    7 => 7,
                    8 => 8,
                    9 => 9,
                ),
                'font_size' => 18,
                'grayscale' => false,
                'font_color' => array(
                    0 => '252525',
                    1 => '8B8787',
                    2 => '550707',
                    3 => '3526E6',
                    4 => '88531E',
                ),
                'fonts' => array(
                    0 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/akbar.ttf',
                    1 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/brushcut.ttf',
                    2 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/molten.ttf',
                    3 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/planetbe.ttf',
                    4 => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/bundles/genemuform/fonts/whoobub.ttf',
                ),
                'background_color' => 'DDDDDD',
                'border_color' => '000000',
                'code' => NULL,
            ),
            'genemu.form.tinymce.configs' => array(
                'theme' => 'advanced',
            ),
            'genemu.form.color.options' => array(
            ),
            'genemu.form.date.options' => array(
            ),
            'genemu.form.rating.options' => array(
            ),
            'genemu.form.file.root_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web',
            'genemu.form.file.folder' => '/upload',
            'genemu.form.file.upload_dir' => '/Library/WebServer/Documents/sfproject/UTCDT_GESTION_CONTENIDOS_DIGITALES/plataformaenlace/app/../web/upload',
            'genemu.form.file.options' => array(
            ),
            'genemu.form.image.selected' => '',
            'genemu.form.image.thumbnails' => array(
            ),
            'genemu.form.image.filters' => array(
            ),
            'console.command.ids' => array(
            ),
            'nelmio_api_doc.parser.form_type_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormTypeParser',
            'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParser',
            'nelmio_api_doc.parser.jms_metadata_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JmsMetadataParser',
        );
    }
}
