@extends('layouts.app')

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">Layout Builder</h3>
                </div>
                <div>
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                         m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#"
                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first m--hide">
                                                <span class="m-nav__section-text">Quick Actions</span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                    <span class="m-nav__link-text">Activity</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                    <span class="m-nav__link-text">Messages</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                    <span class="m-nav__link-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                    <span class="m-nav__link-text">Support</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__separator m-nav__separator--fit">
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="#"
                                                   class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-alert m-alert--icon m-alert--air alert alert-dismissible m--margin-bottom-30 m-alert--square"
                 role="alert">
                <div class="m-alert__icon m-alert__icon--top">
                    <i class="flaticon-cogwheel-2 m--font-brand"></i>
                </div>
                <div class="m-alert__text">
                    <p>
                        The layout builder helps to configure the layout with preferred options and preview it in real
                        time.
                        The configured layout options will be saved until you change or reset them.
                        To use the layout builder choose the layout options and click the <code>Preview</code> button to
                        preview the changes and click the <code>Export</code> to export your changes with following
                        options:
                    </p>
                    <ul style="padding-left: 15px; padding-bottom: 0;">
                        <li style="padding: 5px 0"><code>Export as HTML Layout Package</code> - Allows you to download
                            the HTML template with its includable partials of this demo. In the downloaded folder the
                            partials(header, footer, aside, topbar, etc) will be placed seperated from the base layout
                            to allow you to integrate base layout into your application.
                        </li>
                        <li style="padding: 5px 0"><code>Export Default Version</code> - Allows you to download the
                            default version of this demo with selected layout options.
                        </li>
                        <li style="padding: 5px 0"><code>Export Angular Version</code> - Allows you to download the
                            Angular version of this demo with selected layout options.
                        </li>
                    </ul>
                    <p>
                        <span class="m-badge m-badge--wide m-badge--danger m-badge--rounded">NOTE:</span>&nbsp;&nbsp;The
                        downloaded version does not include the assets folder since the layout builder's main purpose is
                        to help to generate the final HTML code without hassle.
                    </p>
                </div>
            </div>

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                            role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link  active" data-toggle="tab" href="#m_builder_page"
                                   role="tab">
                                    Page
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link " data-toggle="tab" href="#m_builder_header" role="tab">
                                    Header
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link " data-toggle="tab" href="#m_builder_left_aside"
                                   role="tab">
                                    Left Aside
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link " data-toggle="tab" href="#m_builder_right_aside"
                                   role="tab">
                                    Right Aside
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link " data-toggle="tab" href="#m_builder_footer" role="tab">
                                    Footer
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--label-align-right m-form--fit" action="" method="POST">
                    <div class="m-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane  active" id="m_builder_page">
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Layout Type:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control" name="builder[layout][self][layout]">
                                            <option value="fluid" selected>Fluid</option>
                                            <option value="boxed">Boxed</option>
                                        </select>
                                        <span class="m-form__help">Select page layout type</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Page Loader:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control" name="builder[layout][loader][type]">
                                            <option value="" selected>Disabled</option>
                                            <option value="default">Default</option>
                                            <option value="spinner-message">Spinner Message</option>
                                        </select>
                                        <div class="m-form__help">Select page loading indicator</div>
                                    </div>
                                </div>
                                <div class="m-form__group form-group row">
                                    <label class="col-lg-4 col-form-label">Content Skin:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control" name="builder[layout][content][skin]">
                                            <option value="light">White</option>
                                            <option value="light2" selected>Light Grey</option>
                                        </select>
                                        <span class="m-form__help">Please select content skin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="m_builder_header">
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Desktop Fixed Header:</label>
                                    <div class="col-lg-8 col-xl-4">
                             <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="hidden" name="builder[layout][header][self][fixed][desktop]"
                                            value="false">
                                     <input type="checkbox" name="builder[layout][header][self][fixed][desktop]"
                                            value="true" checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Enable fixed header for desktop mode</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Desktop Header Minimize Mode:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control"
                                                name="builder[layout][header][self][fixed][minimize][desktop]">
                                            <option value="false" selected>None</option>
                                            <option value="hide">Hide</option>
                                        </select>
                                        <div class="m-form__help">Set fixed header minimize mode on scroll for desktop
                                            mode
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Mobile Fixed Header:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <input type="hidden" name="builder[layout][header][self][fixed][mobile]"
                                               value="false">
                                        <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="checkbox" name="builder[layout][header][self][fixed][mobile]"
                                            value="true" checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Enable fixed header for mobile mode</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row m--hide">
                                    <label class="col-lg-4 col-form-label">Mobile Minimize Mode:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control"
                                                name="builder[layout][header][self][fixed][minimize][mobile]">
                                            <option value="false" selected>None</option>
                                            <option value="hide">Hide</option>
                                        </select>
                                        <div class="m-form__help">Set fixed header minimize mode on scroll for mobile
                                            mode
                                        </div>
                                    </div>
                                </div>


                                <div class="m-separator m-separator--dashed"></div>

                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Display Header Menu:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <input type="hidden" name="builder[layout][menu][header_desktop][display]"
                                               value="false">
                                        <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="checkbox" name="builder[layout][menu][header_desktop][display]"
                                            value="true" checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Display header menu</div>
                                    </div>
                                </div>
                                <div class="m-form__group form-group row">
                                    <label class="col-lg-4 col-form-label">Dropdown Skin(Desktop):</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control"
                                                name="builder[layout][menu][header_desktop][submenu][skin]">
                                            <option value="light" selected>Light</option>
                                            <option value="dark">Dark</option>
                                        </select>
                                        <span class="m-form__help">Please select header menu dropdown skin</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Display Submenu Arrow(Desktop):</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <input type="hidden" name="builder[layout][menu][header_desktop][arrow]"
                                               value="false">
                                        <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="checkbox" name="builder[layout][menu][header_desktop][arrow]"
                                            value="true" checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Display header menu dropdown arrows on desktop mode
                                        </div>
                                    </div>
                                </div>

                                <div class="m-separator m-separator--dashed"></div>

                                <div class="m-form__group form-group row">
                                    <label class="col-lg-4 col-form-label">Search Type:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control" name="builder[layout][header][search][type]">
                                            <option value="search-default">Expandable Search</option>
                                            <option value="search-dropdown" selected>Dropdown Search</option>
                                        </select>
                                        <span class="m-form__help">Please header search type</span>
                                    </div>
                                </div>
                                <div class="m-form__group form-group row">
                                    <label class="col-lg-4 col-form-label">Dropdown Skin:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control"
                                                name="builder[layout][header][search][dropdown][skin]">
                                            <option value="light" selected>Light</option>
                                            <option value="dark">Dark</option>
                                        </select>
                                        <span class="m-form__help">Please select search results dropdown skin for dropdown search type</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="m_builder_left_aside">
                                <div class="form-group m-form__group row m--hide">
                                    <label class="col-lg-4 col-form-label">Display Aside:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <input type="hidden" name="builder[layout][aside][left][display]" value="false">
                                        <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="checkbox" name="builder[layout][aside][left][display]" value="true"
                                            checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Display left aside</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Aside Skin:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control" name="builder[layout][aside][left][skin]">
                                            <option value="dark" selected>Dark</option>
                                            <option value="light">Light</option>
                                        </select>
                                        <div class="m-form__help">Set left aside skin</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Fixed Aside:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <input type="hidden" name="builder[layout][aside][left][fixed]" value="false">
                                        <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="checkbox" name="builder[layout][aside][left][fixed]" value="true"
                                            checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Set fixed aside layout</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Allow Aside Minimizing:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <input type="hidden" name="builder[layout][aside][left][minimize][toggle]"
                                               value="false">
                                        <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="checkbox" name="builder[layout][aside][left][minimize][toggle]"
                                            value="true" checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Allow aside minimizing</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Default Minimized Aside:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <input type="hidden" name="builder[layout][aside][left][minimize][default]"
                                               value="false">
                                        <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="checkbox" name="builder[layout][aside][left][minimize][default]"
                                            value="true"/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Set aside minimized by default</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Allow Aside Hiding:</label>
                                    <div class="col-lg-8 col-xl-4">
                             <span class="m-switch m-switch--icon-check">
                                 <input type="hidden" name="builder[layout][aside][left][hide][toggle]" value="false">
                                 <label>
                                     <input type="checkbox" name="builder[layout][aside][left][hide][toggle]"
                                            value="true"/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Allow aside hiding</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Default Hidden Aside:</label>
                                    <div class="col-lg-8 col-xl-4">
                             <span class="m-switch m-switch--icon-check">
                                 <input type="hidden" name="builder[layout][aside][left][hide][default]" value="false">
                                 <label>
                                     <input type="checkbox" name="builder[layout][aside][left][hide][default]"
                                            value="true"/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Set aside hidden by default</div>
                                    </div>
                                </div>

                                <div class="m-separator m-separator--dashed"></div>

                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Submenu Toggle:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control" name="builder[layout][menu][aside][dropdown]">
                                            <option value="true">Dropdown</option>
                                            <option value="false" selected>Accordion</option>
                                        </select>
                                        <div class="m-form__help">Select submenu toggle mode</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Dropdown Submenu Skin:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <select class="form-control" name="builder[layout][menu][aside][submenu][skin]">
                                            <option value="inherit" selected>Inherit</option>
                                            <option value="dark">Dark</option>
                                            <option value="light">Light</option>
                                        </select>
                                        <div class="m-form__help">Select submenu skin. If <code>Inherit</code> is
                                            selected it will use the left aside's skin.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Dropdown Submenu Arrow:</label>
                                    <div class="col-lg-8 col-xl-4">
                             <span class="m-switch m-switch--icon-check">
                                 <input type="hidden" name="builder[layout][menu][aside][submenu][dropdown][arrow]"
                                        value="false">
                                 <label>
                                     <input type="checkbox"
                                            name="builder[layout][menu][aside][submenu][dropdown][arrow]" value="true"
                                            checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Enable dropdown submenu arrow</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="m_builder_right_aside">
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Display Right Aside:</label>
                                    <div class="col-lg-8 col-xl-4">
                             <span class="m-switch m-switch--icon-check">
                                 <input type="hidden" name="builder[layout][aside][right][display]" value="false">
                                 <label>
                                     <input type="checkbox" name="builder[layout][aside][right][display]" value="true"/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Display right aside</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="m_builder_footer">
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Fixed Footer:</label>
                                    <div class="col-lg-8 col-xl-4">
                             <span class="m-switch m-switch--icon-check">
                                 <input type="hidden" name="builder[layout][footer][fixed]" value="false">
                                 <label>
                                     <input type="checkbox" name="builder[layout][footer][fixed]" value="true"/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Set fixed header</div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-4 col-form-label">Push Footer:</label>
                                    <div class="col-lg-8 col-xl-4">
                                        <input type="hidden" name="builder[layout][aside][left][push_footer]"
                                               value="false">
                                        <span class="m-switch m-switch--icon-check">
                                 <label>
                                     <input type="checkbox" name="builder[layout][aside][left][push_footer]"
                                            value="true" checked/>
                                     <span></span>
                                 </label>
                             </span>
                                        <div class="m-form__help">Push footer to the right</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8 ">
                                    <button type="submit" name="builder_submit" data-demo="default"
                                            class="btn btn-primary m-btn m-btn--icon m-btn--wide m-btn--air m-btn--custom">
                             <span>
                                 <i class="la la-eye"></i>
                                 <span>Preview</span>
                             </span>
                                    </button>
                                    <div class="dropdown m-dropdown--inline dropup">
                                        <button type="submit" id="builder_export"
                                                class="dropdown-toggle1 btn btn-accent m-btn m-btn--icon m-btn--wide m-btn--air m-btn--custom"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                 <span>
                                     <i class="la la-cog"></i>
                                     <span>Export</span>
                                     <i class="la la-angle-down m-dropdown__arrow"></i>
                                 </span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" id="builder_export_html" data-demo="default"
                                               href="#"><i class="la la-download"></i> Export as HTML Layout
                                                Package(only the page layout and its partials)</a>
                                            <a class="dropdown-item" id="builder_export_html_static" data-demo="default"
                                               href="#"><i class="la la-download"></i> Export Default Version</a>
                                            <a class="dropdown-item" id="builder_export_angular" data-demo="default"
                                               href="#"><i class="la la-download"></i> Export Angular Version</a>
                                        </div>
                                    </div>
                                    <button type="submit" name="builder_reset" data-demo="default"
                                            class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--air m-btn--custom">
                             <span>
                                 <i class="la la-recycle"></i>
                                 <span>Reset</span>
                             </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->

            <!--begin::Modal-->
            <div class="modal fade m-modal-purchase" id="m-modal-purchase" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Buyer Purchase Code Verification</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div id="alert-message" class="alert alert-danger m-alert m-alert--air m--hide"
                                 role="alert"></div>

                            <form class="m-form">
                                <div class="form-group m-form__group m--margin-top-10">
                                    <div class="alert m-alert m-alert--default" role="alert">
                                        To use the online layout builder you are required to have a valid purchase code
                                        and active
                                        <a class="m-link"
                                           href="https://help.market.envato.com/hc/en-us/articles/207886473-Extending-and-Renewing-Item-Support"
                                           target="_blank">support subscription</a>.
                                        Click
                                        <a href="#" class="m-link m--font-bolder" id="m-btn-howto">here</a> to find your
                                        purchase code.
                                    </div>
                                </div>

                                <div id="m-howto" style="display: none;">
                                    <div class="form-control-label m--font-bolder m--margin-bottom-10">How to find your
                                        purchase code:
                                    </div>

                                    <ul class="nav nav-tabs  m-tabs-line m-tabs-line--brand" role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_layout_builder_purchase_code_ver_step_1" role="tab">Step 1</a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_layout_builder_purchase_code_ver_step_2" role="tab">Step 2</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_layout_builder_purchase_code_ver_step_1">
                                            <p>
                                                The purchase confirmation code is available in the license certificate
                                                which you received once you made your purchase from Envato marketplaces.
                                                This is useful for registering the plugin for auto-updates, and also for
                                                gaining access to our support forum.
                                            </p>
                                            <p>
                                                To get your purchase code, first visit one of the following link:
                                                <a href="http://codecanyon.net/downloads">http://codecanyon.net/downloads</a>
                                            </p>
                                            <p>
                                                Next, click the green download button, and then click "License
                                                certificate & purchase code (text)" as shown below.
                                            </p>
                                            <img src="assets/app/media/img/envato/screen1.jpg" alt="Download page"
                                                 width="100%">
                                        </div>
                                        <div class="tab-pane" id="m_layout_builder_purchase_code_ver_step_2">
                                            <p>Next, open the text file, and inside, you’ll see the purchase code
                                                listed:</p>
                                            <img src="assets/app/media/img/envato/screen2.jpg" alt="Purchase code"
                                                 width="100%">
                                        </div>
                                    </div>

                                    <div class="m-separator m-separator--dashed m-separator--space m--margin-top-30 m--margin-bottom-30"></div>
                                </div>

                                <div class="form-group">
                                    <label for="purchase-code" class="form-control-label m--font-bolder">To proceed
                                        please enter your purchase code:</label>
                                    <input type="text" class="form-control" id="purchase-code" value=""
                                           placeholder="Enter your purchase code">
                                    <span class="m-form__help"></span>
                                </div>

                                <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha"
                                         data-sitekey="6Lf92jMUAAAAANk8wz68r73rA2uPGr4_e0gn96BL"></div>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="submit-verify">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal-->
        </div>
    </div>


@endsection