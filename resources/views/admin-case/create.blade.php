@extends('layouts.main')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

    <style>
        textarea {
            resize: vertical;
        }

        span.select2 {
            width: 100% !important;
        }

        .select2-dropdown {
            z-index: 3000 !important;
        }

        .help-block-red {
            color: red;
        }
    </style>
    <!--<div class="row">-->
    <!--<div class="col-lg-12">-->
    <!--<div class="ibox float-e-margins">-->
    <h2>Aduan Baru</h2>
    <!--<div class="ibox-content">-->
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active">
                <a>
                    <span class="fa-stack">
                        <span style="font-size: 14px;" class="badge badge-danger">1</span>
                    </span>
                    MAKLUMAT ADUAN
                </a>
            </li>
            <li class="">
                <a>
                    <span class="fa-stack">
                        <span style="font-size: 14px;" class="badge badge-danger">2</span>
                    </span>
                    LAMPIRAN
                </a>
            </li>
            <li class="">
                <a>
                    <span class="fa-stack">
                        <span style="font-size: 14px;" class="badge badge-danger">3</span>
                    </span>
                    SEMAKAN ADUAN
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active">
                <div class="panel-body">
                    <form method="POST" action="https://e-aduan.kpdnhep.gov.my/admin-case" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="rOg867nYBTBbG50L6qPon0ZV4GzbRrJ0siTpmSZE">
                        <input type="hidden" name="_token" value="rOg867nYBTBbG50L6qPon0ZV4GzbRrJ0siTpmSZE">
                        <h4>Cara Terima</h4>
                        <!--<div class="hr-line-solid"></div>-->
                        <hr style="background-color: #ccc; height: 1px; width: 100%; border: 0;">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="CA_RCVDT" class="col-sm-2 control-label">Tarikh</label>
                                    <div class="col-sm-10">
                                        <input class="form-control input-sm" readonly="true" name="CA_RCVDT" type="text" value="20-08-2021 05:14 AM" id="CA_RCVDT">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_RCVBY" class="col-sm-2 control-label">Penerima</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <input class="form-control input-sm" readonly="true" id="RcvByName" name="" type="text" value="hariz">
                                            <input class="form-control input-sm" id="RcvById" name="CA_RCVBY" type="hidden" value="112092">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary btn-sm" id="UserSearchModal">Carian</button>
                                                <!--<button class="btn btn-primary btn-sm" type="button" id="CheckJpn">Semak JPN</button>-->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="CA_RCVTYP" class="col-sm-4 control-label required">Cara Penerimaan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control input-sm" id="CA_RCVTYP" name="CA_RCVTYP">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="S23">Aduan Web</option>
                                            <option value="S15">Bilik Gerakan</option>
                                            <option value="S20">E-Mail</option>
                                            <option value="S22">Faks</option>
                                            <option value="S17">Hadir Sendiri</option>
                                            <option value="S08">Ibu Pejabat Penguatkuasa</option>
                                            <option value="S24">Keratan Akhbar</option>
                                            <option value="S36">Lain-lain</option>
                                            <option value="S07">Lain-lain Bahagian Dalam Kementerian</option>
                                            <option value="S25">SMS</option>
                                            <option value="S19">Surat</option>
                                            <option value="S33">Tali Khidmat</option>
                                            <option value="S18">Telefon</option>
                                            <option value="S37">Whatsapp</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="div_CA_BPANO" style="display: none;" class="form-group">
                                    <label for="CA_BPANO" class="col-sm-4 control-label required">No. Aduan BPA</label>
                                    <div class="col-sm-8">
                                        <input class="form-control input-sm" name="CA_BPANO" type="text" value="" id="CA_BPANO">
                                    </div>
                                </div>
                                <div id="div_CA_SERVICENO" style="display: none;" class="form-group">
                                    <label for="CA_SERVICENO" class="col-sm-4 control-label required">No. Tali Khidmat</label>
                                    <div class="col-sm-8">
                                        <input class="form-control input-sm" name="CA_SERVICENO" type="text" value="" id="CA_SERVICENO">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Maklumat Pengadu</h4>
                        <!--<div class="hr-line-solid"></div>-->
                        <hr style="background-color: #ccc; height: 1px; width: 100%; border: 0;">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="CA_DOCNO" class="col-sm-6 control-label required">No. Kad Pengenalan/Pasport</label>
                                    <div class="col-sm-6">
                                        <!--<div class="input-group">-->
                                        @if ($ic != null)
                                        <input class="form-control input-sm" id="CA_DOCNO" maxlength="12" name="CA_DOCNO" type="text" value="{{$ic}}">
                                        @else
                                        <input class="form-control input-sm" id="CA_DOCNO" maxlength="12" name="CA_DOCNO" type="text" value="">
                                        @endif
                                        <!--<span class="input-group-btn">-->
                                        <!--<button class="btn btn-primary btn-sm" type="button" id="CheckJpn">Semak JPN</button>-->
                                        <!--<button class="ladda-button ladda-button-demo btn btn-primary btn-sm" type="button" data-style="expand-right" id="CheckJpn">Semak JPN</button>-->
                                        <!--</span>-->
                                        <!--                                </div>-->
                                        <span class="help-block m-b-none" id="message"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6" style="color: red"><strong>** Diperlukan salah satu</strong></div>
                                <div class="form-group">
                                    <label for="CA_EMAIL" class="col-sm-6 control-label required1">Emel</label>
                                    <div class="col-sm-6">
                                        <input class="form-control input-sm" name="CA_EMAIL" type="email" value="{{$email}}" id="CA_EMAIL">
                                        <style scoped>
                                            input:invalid,
                                            textarea:invalid {
                                                color: red;
                                            }
                                        </style>
                                        <!---->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_MOBILENO" class="col-sm-6 control-label required1">No. Telefon (Bimbit)</label>
                                    <div class="col-sm-6">
                                        <input class="form-control input-sm" onkeypress="return isNumberKey(event)" maxlength="12" name="CA_MOBILENO" type="text" value="{{$telefon}}" id="CA_MOBILENO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_TELNO" class="col-sm-6 control-label required1">No. Telefon (Rumah)</label>
                                    <div class="col-sm-6">
                                        <input class="form-control input-sm" onkeypress="return isNumberKey(event)" maxlength="10" name="CA_TELNO" type="text" value="" id="CA_TELNO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_FAXNO" class="col-sm-6 control-label">No. Faks</label>
                                    <div class="col-sm-6">
                                        <input class="form-control input-sm" onkeypress="return isNumberKey(event)" maxlength="10" name="CA_FAXNO" type="text" value="" id="CA_FAXNO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_ADDR" class="col-sm-6 control-label">Alamat</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control input-sm" rows="4" name="CA_ADDR" cols="50" id="CA_ADDR">{{$alamat}}</textarea>
                                        <input class="form-control input-sm" id="CA_MYIDENTITY_ADDR" name="CA_MYIDENTITY_ADDR" type="hidden" value="">
                                    </div>
                                </div>
                                <div class="form-group feedback" style="display:none;">
                                    <label for="CA_ADDR_FEED" class="col-sm-6 control-label">Alamat MyIdentity</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control input-sm" disabled="disabled" rows="4" name="CA_ADDR_FEED" cols="50" id="CA_ADDR_FEED"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="CA_NAME" class="col-sm-3 control-label required">Nama</label>
                                    <div class="col-sm-9">
                                        @if ($nama != null)
                                        <input class="form-control input-sm" id="CA_NAME" name="CA_NAME" type="text" value="{{$nama}}">
                                        @else
                                        <input class="form-control input-sm" id="CA_NAME" name="CA_NAME" type="text" value="">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_AGE" class="col-sm-3 control-label">Umur</label>
                                    <div class="col-sm-9">
                                        <input class="form-control input-sm" id="CA_AGE" onkeypress="return isNumberKey(event)" maxlength="3" name="CA_AGE" type="text" value="">
                                        <!---->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_SEXCD" class="col-sm-3 control-label">Jantina</label>
                                    <div class="col-sm-9">
                                        <select class="form-control input-sm" id="CA_SEXCD" name="CA_SEXCD">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="M">Lelaki</option>
                                            <option value="F">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_RACECD" class="col-sm-3 control-label">Bangsa</label>
                                    <div class="col-sm-9">
                                        <select class="form-control input-sm" id="CA_RACECD" name="CA_RACECD">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="M">MELAYU</option>
                                            <option value="C">CINA</option>
                                            <option value="I">INDIA</option>
                                            <option value="BSAB">BUMIPUTRA SABAH</option>
                                            <option value="BSAR">BUMIPUTRA SARAWAK</option>
                                            <option value="O">LAIN-LAIN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_NATCD" class="col-sm-3 control-label">Warganegara</label>
                                    <div class="col-sm-9">

                                        <!--<div class="radio"><label><input type="radio" value="" name="CA_NATCD" id="" ><i></i></label></div>-->

                                        <div class="radio radio-success">
                                            <input id="CA_NATCD1" type="radio" name="CA_NATCD" value="1" onclick="check(this.value)" checked>
                                            <label for="CA_NATCD1"> Warganegara </label>
                                        </div>
                                        <div class="radio radio-success">
                                            <input id="CA_NATCD2" type="radio" name="CA_NATCD" value="0" onclick="check(this.value)">
                                            <label for="CA_NATCD2"> Bukan Warganegara </label>
                                        </div>
                                        <!--<div class="radio"><label><input type="radio" value="oth" name="CA_NATCD" id="national2" ><i></i>Bukan Warganegara</label></div>-->
                                    </div>
                                </div>
                                <div id="warganegara" style="display:block">
                                    <!--<div id="warganegara" style="display: ">-->
                                    <div class="form-group ">
                                        <label for="CA_POSCD" class="col-sm-3 control-label">Poskod</label>
                                        <div class="col-sm-9">
                                            <input class="form-control input-sm" onkeypress="return isNumberKey(event)" maxlength="5" name="CA_POSCD" type="text" value="" id="CA_POSCD">
                                            <input class="form-control input-sm" id="CA_MYIDENTITY_POSCD" name="CA_MYIDENTITY_POSCD" type="hidden" value="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="CA_STATECD" class="col-sm-3 control-label required">Negeri</label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm required" id="CA_STATECD" name="CA_STATECD">
                                                <option value="" selected="selected">-- SILA PILIH --</option>
                                                <option value="01">JOHOR</option>
                                                <option value="02">KEDAH</option>
                                                <option value="03">KELANTAN</option>
                                                <option value="04">MELAKA</option>
                                                <option value="05">NEGERI SEMBILAN</option>
                                                <option value="06">PAHANG</option>
                                                <option value="07">PULAU PINANG</option>
                                                <option value="08">PERAK</option>
                                                <option value="09">PERLIS</option>
                                                <option value="10">SELANGOR</option>
                                                <option value="11">TERENGGANU</option>
                                                <option value="12">SABAH</option>
                                                <option value="13">SARAWAK</option>
                                                <option value="14">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                                <option value="15">WILAYAH PERSEKUTUAN LABUAN</option>
                                                <option value="16">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
                                            </select>
                                            <input class="form-control input-sm" id="CA_MYIDENTITY_STATECD" name="CA_MYIDENTITY_STATECD" type="hidden" value="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="CA_DISTCD" class="col-sm-3 control-label required">Daerah</label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" id="CA_DISTCD" name="CA_DISTCD">
                                                <option value="" selected="selected">-- SILA PILIH --</option>
                                            </select>
                                            <input class="form-control input-sm" id="CA_MYIDENTITY_DISTCD" name="CA_MYIDENTITY_DISTCD" type="hidden" value="">
                                            <!---->
                                            <span class="help-block m-b-none"><em><a href="/storage/SENARAI KOD DAERAH DAN MUKIM 02012018.pdf" target="_blank">Bantuan?</a></em></span>
                                        </div>
                                    </div>
                                </div>
                                <!--<div id="bknwarganegara" style="display:none">-->
                                <div id="bknwarganegara" style="display: none">
                                    <div class="form-group ">
                                        <label for="CA_COUNTRYCD" class="col-sm-3 control-label required">Negara Asal</label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" id="CA_COUNTRYCD" name="CA_COUNTRYCD">
                                                <option value="" selected="selected">-- SILA PILIH --</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, The Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte D&#039;Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People&#039;s Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People&#039;s Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province Of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis And Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <input class="form-control input-sm" id="CA_STATUSPENGADU" name="CA_STATUSPENGADU" type="hidden" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Maklumat Aduan</h4>
                        <!--<div class="hr-line-solid"></div>-->
                        <hr style="background-color: #ccc; height: 1px; width: 100%; border: 0;">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="CA_CMPLCAT" class="col-sm-5 control-label required">Kategori</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_CMPLCAT">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="BPGK 24">Badan Perlesenan (Royalti)</option>
                                            <option value="BPGK 03">Barang Kawalan</option>
                                            <option value="BPGK 11">Barang Tiruan</option>
                                            <option value="BPGK 26">Barang-barang Yang Diperbuat Daripada Mana-mana Bahagian Anjing/Babi</option>
                                            <option value="BPGK 15">Bengkel Kenderaan Bermotor</option>
                                            <option value="BPGK 02">Cetak Rompak</option>
                                            <option value="BPGK 29">Ejen Pemilikan Semula</option>
                                            <option value="BPGK 20">Gores &amp; Menang</option>
                                            <option value="BPGK 01">Harga</option>
                                            <option value="BPGK 16">Iklan Mengelirukan</option>
                                            <option value="BPGK 28">Jualan Kredit</option>
                                            <option value="BPGK 05">Jualan Langsung</option>
                                            <option value="BPGK 13">Jualan Murah</option>
                                            <option value="BPGK 23">Label Cakera Optik</option>
                                            <option value="BPGK 17">Peraturan Standard Keselamatan (MC/MS)</option>
                                            <option value="BPGK 12">Perihal Halal</option>
                                            <option value="BPGK 25">Perihal Perdagangan Palsu</option>
                                            <option value="BPGK 30">Perintah Kawalan Pergerakan (PKP)</option>
                                            <option value="BPGK 10">Perkhidmatan Mengelirukan</option>
                                            <option value="BPDN 01">Perlesenan Jualan Langsung</option>
                                            <option value="BPDN 03">Perlesenan Perdagangan Pengedaran</option>
                                            <option value="BPDN 04">Perlesenan Petroleum</option>
                                            <option value="BPGK 06">Sewa Beli Kenderaan</option>
                                            <option value="BPGK 27">Skim Piramid</option>
                                            <option value="BPGK 04">Timbang dan Sukat</option>
                                            <option value="BPGK 19">Transaksi Dalam Talian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_CMPLCD" class="col-sm-5 control-label required">Subkategori</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_CMPLCD" name="CA_CMPLCD">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="div_CA_CMPLKEYWORD" style="display: none;">
                                    <label for="CA_CMPLKEYWORD" class="col-sm-5 control-label required">Jenis Barangan</label>
                                    <div class="col-sm-7">
                                        <!--  -->
                                        <select class="form-control input-sm" id="CA_CMPLKEYWORD" name="CA_CMPLKEYWORD">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="101">Makanan</option>
                                            <option value="102">Minuman</option>
                                            <option value="103">Perkhidmatan</option>
                                            <option value="104">Gula</option>
                                            <option value="105">Tepung Gandum</option>
                                            <option value="106">Minyak Masak</option>
                                            <option value="107">Gas Memasak (LPG)</option>
                                            <option value="108">Petrol</option>
                                            <option value="109">Diesel</option>
                                            <option value="110">Topeng Muka</option>
                                            <option value="199">Lain Lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="CA_TTPMTYP" style="display: none;" class="form-group">
                                    <label for="CA_TTPMTYP" class="col-sm-5 control-label required">Penuntut/Penentang</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_TTPMTYP" name="CA_TTPMTYP">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="100">Penuntut</option>
                                            <option value="200">Penentang</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="CA_TTPMNO" style="display: none;" class="form-group">
                                    <label for="CA_TTPMNO" class="col-sm-5 control-label required">No. TTPM</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" name="CA_TTPMNO" type="text" value="" id="CA_TTPMNO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!--<div id="div_CA_ONLINECMPL_AMOUNT" style="display: none;" class="form-group">-->
                                    <label for="CA_ONLINECMPL_AMOUNT" class="col-sm-5 control-label required">Jumlah Kerugian (RM)</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" onkeypress="return isNumberKey1(event)" id="CA_ONLINECMPL_AMOUNT" name="CA_ONLINECMPL_AMOUNT" type="text" value="0.00">
                                    </div>
                                </div>
                                <div id="div_SERVICE_PROVIDER_INFO" style="display: none">
                                    <h4>Maklumat Penjual / Pihak Yang Diadu</h4>
                                    <!--<div class="hr-line-solid"></div>-->
                                    <hr style="background-color: #ccc; height: 1px; width: 206%; border: 0;">
                                </div>
                                <div id="div_CA_AGAINST_PREMISE" style="display: block;" class="form-group">
                                    <label for="CA_AGAINST_PREMISE" class="col-sm-5 control-label required">
                                        Jenis Premis
                                    </label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_AGAINST_PREMISE" >
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="P10">Kedai Tekstil</option>
                                            <option value="P11">Pasaraya</option>
                                            <option value="P12">Pasar Basah</option>
                                            <option value="P13">Pasar Malam</option>
                                            <option value="P14">Bengkel Kereta</option>
                                            <option value="P15">Bengkel Motorsikal</option>
                                            <option value="P16">Gerai Makan</option>
                                            <option value="P17">Pasar Borong</option>
                                            <option value="P18">Pasar Tani</option>
                                            <option value="P19">Kedai Barang Logam</option>
                                            <option value="P2">Kedai Elektrik</option>
                                            <option value="P20">Stesen Minyak</option>
                                            <option value="P21">Rumah Kediaman</option>
                                            <option value="P22">Pasar Raya Besar (Hypermarket)</option>
                                            <option value="P23">Farmasi</option>
                                            <option value="P3">Restoran</option>
                                            <option value="P4">Kilang</option>
                                            <option value="P5">Kedai Barang Terpakai</option>
                                            <option value="P6">Perabot</option>
                                            <option value="P7">Pengimport</option>
                                            <option value="P8">Pemborong</option>
                                            <option value="P9">Kedai Runcit</option>
                                            <option value="P24">Syarikat</option>
                                            <option value="P99">Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="div_CA_ONLINECMPL_PROVIDER" style="display: none;" class="form-group">

                                    <label for="CA_ONLINECMPL_PROVIDER" class="col-sm-5 control-label required">Pembekal Perkhidmatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_ONLINECMPL_PROVIDER" name="CA_ONLINECMPL_PROVIDER">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="101">11street.my</option>
                                            <option value="168">adidas.com.my</option>
                                            <option value="170">al-ikhsan.com</option>
                                            <option value="112">alibaba.com</option>
                                            <option value="110">amazon.com</option>
                                            <option value="166">bathandbodyworks.com.my</option>
                                            <option value="158">carousell.com</option>
                                            <option value="152">chika pow wow</option>
                                            <option value="157">chilindo.com</option>
                                            <option value="137">dealmates.com.my</option>
                                            <option value="119">dell.com</option>
                                            <option value="146">doorstep.com.my</option>
                                            <option value="148">dsyr.com</option>
                                            <option value="116">easystore.co</option>
                                            <option value="107">eBay.com.my</option>
                                            <option value="144">eshop.tesco.com.my</option>
                                            <option value="114">etsy.com</option>
                                            <option value="172">ezbuy.my</option>
                                            <option value="159">facebook</option>
                                            <option value="125">fashionvalet.com</option>
                                            <option value="142">foodpanda.my</option>
                                            <option value="104">gemfive.com</option>
                                            <option value="115">global.rakuten.com</option>
                                            <option value="174">goshop.com.my</option>
                                            <option value="165">Grab</option>
                                            <option value="105">groupon.my</option>
                                            <option value="129">gsc.com.my</option>
                                            <option value="171">guardian.com.my</option>
                                            <option value="141">hauteavenue.com</option>
                                            <option value="109">hermo.my</option>
                                            <option value="122">hishop.my</option>
                                            <option value="169">ikea.com</option>
                                            <option value="162">Instagram</option>
                                            <option value="118">ipmart.com.my</option>
                                            <option value="179">kfc.com.my</option>
                                            <option value="149">kwerkee.com</option>
                                            <option value="999">lain-lain</option>
                                            <option value="100">lazada.com.my</option>
                                            <option value="102">lelong.com.my</option>
                                            <option value="135">livingsocial.com</option>
                                            <option value="180">mcdelivery.com.my</option>
                                            <option value="138">milkadeal.com</option>
                                            <option value="120">mobile mega mall</option>
                                            <option value="123">mphonline.com</option>
                                            <option value="155">mudah.my</option>
                                            <option value="178">myaeon.com.my</option>
                                            <option value="134">mydeal.com.my</option>
                                            <option value="139">mysale.my</option>
                                            <option value="154">olx.com</option>
                                            <option value="150">pennyauction.com.my</option>
                                            <option value="121">poplook.com</option>
                                            <option value="163">Presto Mall</option>
                                            <option value="145">prestofreshgrocery.com</option>
                                            <option value="108">qoo10.my</option>
                                            <option value="140">reebonz.com</option>
                                            <option value="176">senheng.com.my</option>
                                            <option value="124">shashinki.com</option>
                                            <option value="106">shopee.com.my</option>
                                            <option value="153">soyo.my</option>
                                            <option value="136">streetdeal.my</option>
                                            <option value="111">taobao.com</option>
                                            <option value="167">Telegram</option>
                                            <option value="131">tgv.com.my</option>
                                            <option value="164">Tik Tok</option>
                                            <option value="113">tmall.com</option>
                                            <option value="177">Twitter</option>
                                            <option value="151">ubid.my</option>
                                            <option value="181">watsons.com.my</option>
                                            <option value="161">Wechat</option>
                                            <option value="160">WhatsApp</option>
                                            <option value="147">White.MY</option>
                                            <option value="175">wowshop.com.my</option>
                                            <option value="117">youbeli.com</option>
                                            <option value="103">zalora.com.my</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="div_CA_ONLINECMPL_URL" style="display: none;" class="form-group">


                                    <label for="CA_ONLINECMPL_URL" class="col-sm-5 control-label ">
                                        Laman Web / URL / ID
                                    </label>
                                    <!---->
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" placeholder="(Contoh: www.google.com)" name="CA_ONLINECMPL_URL" type="text" value="">
                                    </div>
                                </div>
                                <div id="div_CA_ONLINECMPL_PYMNTTYP" style="display: none;" class="form-group">
                                    <!--<label for="CA_ONLINECMPL_PYMNTTYP" class="col-sm-5 control-label ">Cara Pembayaran</label>-->
                                    <label for="CA_ONLINECMPL_PYMNTTYP" class="col-sm-5 control-label required">Cara Pembayaran</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_ONLINECMPL_PYMNTTYP" name="CA_ONLINECMPL_PYMNTTYP">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="CRC">Kad Kredit</option>
                                            <option value="COD">Tunai Semasa Hantaran</option>
                                            <option value="OTF">Pindahan Atas Talian</option>
                                            <option value="CDM">Mesin Deposit Tunai</option>
                                            <option value="TB">Tiada Pembelian</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="div_CA_ONLINECMPL_BANKCD" style="display: none;" class="form-group">
                                    <label for="CA_ONLINECMPL_BANKCD" class="col-sm-5 control-label ">
                                        Nama Bank
                                    </label>
                                    <!---->
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_ONLINECMPL_BANKCD" name="CA_ONLINECMPL_BANKCD">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="02">Affin Islamic Bank Berhad</option>
                                            <option value="20">Agro Bank</option>
                                            <option value="03">Al Rajhi Banking &amp; Investment Corporation (Malaysia) Berhad</option>
                                            <option value="04">Alliance Islamic Bank Berhad</option>
                                            <option value="05">AmBank Islamic Berhad</option>
                                            <option value="06">Asian Finance Bank Berhad</option>
                                            <option value="07">Bank Islam Malaysia Berhad</option>
                                            <option value="19">Bank Kerjasama Rakyat Malaysia (Bank Rakyat)</option>
                                            <option value="08">Bank Muamalat Malaysia Berhad</option>
                                            <option value="17">Bank Simpanan Nasional</option>
                                            <option value="09">CIMB Islamic Bank Berhad</option>
                                            <option value="18">City Bank</option>
                                            <option value="11">Hong Leong Islamic Bank Berhad</option>
                                            <option value="10">HSBC Amanah Malaysia Berhad</option>
                                            <option value="12">Kuwait Finance House (Malaysia) Berhad</option>
                                            <option value="01">Maybank</option>
                                            <option value="13">OCBC Al-Amin Bank Berhad</option>
                                            <option value="14">Public Islamic Bank Berhad</option>
                                            <option value="15">RHB Islamic Bank Berhad</option>
                                            <option value="16">Standard Chartered Saadiq Berhad</option>
                                            <option value="21">Pembekal Perkhidmatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="div_CA_ONLINECMPL_ACCNO" style="display: none;" class="form-group">
                                    <label for="CA_ONLINECMPL_ACCNO" class="col-sm-5 control-label ">
                                        No. Akaun Bank / No. Transaksi FPX
                                    </label>
                                    <!---->
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" name="CA_ONLINECMPL_ACCNO" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;" id="checkpernahadu">

                                    <label for="" class="col-sm-5 control-label"></label>
                                    <div class="col-sm-7">
                                        <div class="checkbox checkbox-success">
                                            <input name="CA_ONLINECMPL_IND" id="CA_ONLINECMPL_IND" type="checkbox" onclick="onlinecmplind()" value="1">
                                            <label for="CA_ONLINECMPL_IND">
                                                Pernah membuat aduan secara rasmi kepada Pembekal Perkhidmatan?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div id="div_CA_ONLINECMPL_CASENO" style="display: none;" class="form-group">

                                    <!--<div id="div_CA_ONLINECMPL_CASENO" style="display: ;" class="form-group">-->
                                    <label for="CA_ONLINECMPL_CASENO" class="col-sm-5 control-label">No. Aduan Rujukan</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" name="CA_ONLINECMPL_CASENO" type="text" value="" id="CA_ONLINECMPL_CASENO">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="div_ONLINECMPL" style="height: 190px; display: none;"></div>
                                <div class="form-group">
                                    <label for="CA_AGAINSTNM" class="col-sm-5 control-label required">Nama (Syarikat/Premis/Penjual)</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" name="CA_AGAINSTNM" type="text" value="" id="CA_AGAINSTNM">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_AGAINST_TELNO" class="col-sm-5 control-label">No. Telefon (Pejabat)</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" onkeypress="return isNumberKey(event)" maxlength="10" name="CA_AGAINST_TELNO" type="text" value="" id="CA_AGAINST_TELNO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_AGAINST_MOBILENO" class="col-sm-5 control-label">No. Telefon (Bimbit)</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" onkeypress="return isNumberKey(event)" maxlength="12" name="CA_AGAINST_MOBILENO" type="text" value="" id="CA_AGAINST_MOBILENO">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_AGAINST_EMAIL" class="col-sm-5 control-label">Emel</label>
                                    <div class="col-sm-7">
                                        <style scoped>
                                            input:invalid,
                                            textarea:invalid {
                                                color: red;
                                            }
                                        </style>
                                        <input id="CA_AGAINST_EMAIL" type="email" class="form-control input-sm" name="CA_AGAINST_EMAIL" value="">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="CA_AGAINST_FAXNO" class="col-sm-5 control-label">No. Faks</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" onkeypress="return isNumberKey(event)" maxlength="10" name="CA_AGAINST_FAXNO" type="text" value="" id="CA_AGAINST_FAXNO">
                                    </div>
                                </div>
                                <div id="checkinsertadd" style="display: none;" class="form-group">

                                    <label for="" class="col-sm-5 control-label"></label>
                                    <div class="col-sm-7">
                                        <div class="checkbox checkbox-success">
                                            <input name="CA_ONLINEADD_IND" id="CA_ONLINEADD_IND" type="checkbox" onclick="onlineaddind()" value="1">
                                            <label for="CA_ONLINEADD_IND">
                                                Mempunyai alamat penuh penjual / pihak yang diadu?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div id="div_CA_AGAINSTADD" style="display: block;" class="form-group">

                                    <!--<label for="CA_AGAINSTADD" class="col-sm-5 control-label required">Alamat</label>-->
                                    <label for="CA_AGAINSTADD" class="col-sm-5 control-label required">Alamat</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control input-sm" rows="4" name="CA_AGAINSTADD" cols="50" id="CA_AGAINSTADD"></textarea>
                                    </div>
                                </div>
                                <div id="div_CA_AGAINST_POSTCD" style="display: block;" class="form-group">

                                    <!--<label for="CA_AGAINST_POSTCD" class="col-sm-5 control-label ">Poskod</label>-->
                                    <label for="CA_AGAINST_POSTCD" class="col-sm-5 control-label">Poskod</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" onkeypress="return isNumberKey(event)" maxlength="5" name="CA_AGAINST_POSTCD" type="text" value="" id="CA_AGAINST_POSTCD">
                                    </div>
                                </div>
                                <div id="div_CA_AGAINST_STATECD" style="display: block;" class="form-group">

                                    <label for="CA_AGAINST_STATECD" class="col-sm-5 control-label required">Negeri</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_AGAINST_STATECD" name="CA_AGAINST_STATECD">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                            <option value="01">JOHOR</option>
                                            <option value="02">KEDAH</option>
                                            <option value="03">KELANTAN</option>
                                            <option value="04">MELAKA</option>
                                            <option value="05">NEGERI SEMBILAN</option>
                                            <option value="06">PAHANG</option>
                                            <option value="07">PULAU PINANG</option>
                                            <option value="08">PERAK</option>
                                            <option value="09">PERLIS</option>
                                            <option value="10">SELANGOR</option>
                                            <option value="11">TERENGGANU</option>
                                            <option value="12">SABAH</option>
                                            <option value="13">SARAWAK</option>
                                            <option value="14">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                            <option value="15">WILAYAH PERSEKUTUAN LABUAN</option>
                                            <option value="16">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="div_CA_AGAINST_DISTCD" style="display: block;" class="form-group">

                                    <label for="CA_AGAINST_DISTCD" class="col-sm-5 control-label required">Daerah</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm" id="CA_AGAINST_DISTCD" name="CA_AGAINST_DISTCD">
                                            <option value="" selected="selected">-- SILA PILIH --</option>
                                        </select>
                                        <span class="help-block m-b-none"><em><a href="/storage/SENARAI KOD DAERAH DAN MUKIM 02012018.pdf" target="_blank">Bantuan?</a></em></span>
                                    </div>
                                </div>
                                <!--                        <div class="form-group ">
                            <label for="" class="col-sm-5 control-label"></label>
                                <div class="col-sm-7">
                                    <div class="checkbox checkbox-primary">
                                        <input id="CA_ROUTETOHQIND" type="checkbox" name="CA_ROUTETOHQIND">
                                        <label for="CA_ROUTETOHQIND">
                                            Hantar aduan ke Ibu Pejabat Penguatkuasa
                                        </label>
                                    </div>
                                </div>
                            </div>-->
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="CA_SUMMARY" class="col-sm-1 control-label required">Keterangan Aduan</label>
                                    <div class="col-sm-11">
                                        <textarea class="form-control input-sm" rows="4" name="CA_SUMMARY" cols="50" id="CA_SUMMARY"></textarea>
                                        <!--<span class="help-block m-b-none help-block-red"></span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row feedback" style="display:none;">
                            <div class="col-md-12">
                                <div class="col-sm-12">
                                    <hr>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="CA_RAW" class="col-sm-1 control-label required">RAW</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control input-sm" rows="6" readonly="readonly" name="CA_RAW" cols="50" id="CA_RAW"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="CA_IMAGE" class="col-sm-1 control-label required">IMAGE</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control input-sm" rows="6" readonly="readonly" name="CA_IMAGE" cols="50" id="CA_IMAGE"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="FEED_TYPE" class="col-sm-1 control-label required">FEED TYPE</label>
                                        <div class="col-sm-12">
                                            <input class="form-control input-sm" readonly="readonly" name="FEED_TYPE" type="text" value="" id="FEED_TYPE">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="FEED_ID" class="col-sm-1 control-label required">FEED ID</label>
                                        <div class="col-sm-12">
                                            <input class="form-control input-sm" readonly="readonly" name="FEED_ID" type="text" value="" id="FEED_ID">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12" align="center">
                                <!--                            
                        -->
                                <!--<input style="visibility:visible" type="button" id="btncontinue" value="Simpan &amp; Seterusnya" onClick="btncontinueclick();" class="btn btn-primary btn-sm" />-->
                                <!--<input style="visibility:hidden" type="submit" id="btnupdate" value="Hantar" class="btn btn-primary btn-sm" />-->
                                <!--<input style="visibility:hidden" type="button" id="btnsave" value="Kemaskini" onClick="btnupdateclick();" class="btn btn-primary btn-sm" />-->
                                <a class="btn btn-warning btn-sm" href="https://e-aduan.kpdnhep.gov.my/admin-case">Kembali</a>
                                <button type="submit" class="btn btn-success btn-sm">Simpan & Seterusnya <i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--            <div class="ibox ">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-3">

                                        </div>
                                    </div>
                                </div>
                            </div>-->
            </div>
        </div>
    </div>

    <!-- Modal Start -->
    <div id="carian-penerima" class="modal fade" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Carian Penerima</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="https://e-aduan.kpdnhep.gov.my/admin-case/create" accept-charset="UTF-8" id="search-form" class="form-horizontal"><input name="_token" type="hidden" value="rOg867nYBTBbG50L6qPon0ZV4GzbRrJ0siTpmSZE">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="icnew" class="col-sm-5 control-label">No. Kad Pengenalan</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" name="icnew" type="text" value="" id="icnew">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-5 control-label">Nama Pengguna</label>
                                    <div class="col-sm-7">
                                        <input class="form-control input-sm" name="name" type="text" value="" id="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="state_cd" class="col-sm-3 control-label">Negeri</label>
                                    <div class="col-sm-9">

                                        <input class="form-control input-sm" id="state_cd_user" readonly name="state_cd_text" type="text" value="WILAYAH PERSEKUTUAN PUTRAJAYA">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="brn_cd" class="col-sm-3 control-label">Cawangan</label>
                                    <div class="col-sm-9">

                                        <input class="form-control input-sm" id="brn_cd" readonly name="brn_cd_text" type="text" value="BAHAGIAN GERAKAN KEPENGGUNAAN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group" align="center">
                                <input class="btn btn-primary btn-sm" type="submit" value="Carian">
                                <input class="btn btn-default btn-sm" id="resetbtn" type="reset" value="Semula">
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="users-table" class="table table-striped table-bordered table-hover dataTables-example" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Kad Pengenalan</th>
                                    <th>Nama</th>
                                    <th>Negeri</th>
                                    <th>Cawangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Modal End -->

</div>
<script>
    window.feedback = {
        "feedback": null
    };
    window.sender = {
        "sender": null
    };
</script>
@stop

<!-- Mainly scripts -->
<script src="https://e-aduan.kpdnhep.gov.my/js/jquery-2.1.1.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/js/plugins/pace/pace.min.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/js/store.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/js/jquery-idleTimeout.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/js/app.js"></script>
<!-- HighChart -->
<script src="https://e-aduan.kpdnhep.gov.my/js/plugins/highcharts/highcharts.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/js/plugins/highcharts/highcharts-3d.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/js/plugins/highcharts/modules/exporting.js"></script>
<!-- Data Tables -->
<script src="https://e-aduan.kpdnhep.gov.my/js/plugins/dataTables/datatables.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/js/plugins/dataTables/Buttons-1.4.2/js/buttons.colVis.min.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/../themes/ace/js/moment.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/../themes/ace/js/bootstrap-datepicker.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/../themes/ace/js/daterangepicker.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/../themes/ace/js/bootstrap-timepicker.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/../themes/ace/js/bootstrap-datetimepicker.js"></script>

<!-- Dual Listbox -->
<script src="https://e-aduan.kpdnhep.gov.my/../themes/inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/../themes/inspinia/js/plugins/select2/select2.full.min.js"></script>

<!-- Ladda -->
<script src="https://e-aduan.kpdnhep.gov.my/themes/inspinia/js/plugins/ladda/spin.min.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/themes/inspinia/js/plugins/ladda/ladda.min.js"></script>
<script src="https://e-aduan.kpdnhep.gov.my/themes/inspinia/js/plugins/ladda/ladda.jquery.min.js"></script>

<!-- Sweet alert -->
<script src="https://e-aduan.kpdnhep.gov.my/themes/inspinia/js/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Idle Timer plugin -->
<!--<script src="js/plugins/idle-timer/idle-timer.min.js"></script>-->
<script src="https://e-aduan.kpdnhep.gov.my/themes/inspinia/js/plugins/idle-timer/idle-timer.min.js"></script>

<!-- Page-Level Scripts -->
<script type="text/javascript">
    $(document).ready(function() {
        if (feedback.feedback && true == true) {
            console.log(feedback.feedback)
            $('.feedback').show()
            $('#CA_NAME').val(feedback.feedback.info.name)
            $('#CA_DOCNO').val(feedback.feedback.info.ic)
            $('#CA_ADDR').val(feedback.feedback.info.addr)
            $('#CA_AGAINSTNM').val(feedback.feedback.info.shop_name)
            $('#CA_AGAINSTADD').val(feedback.feedback.info.shop_address)
            $('#CA_SUMMARY').val(feedback.feedback.info.report)
            $('#CA_TELNO').val(feedback.feedback.info.phone)
            $('#CA_EMAIL').val(feedback.feedback.info.email)
            $('#CA_RAW').val(feedback.feedback.raw)
            $('#CA_IMAGE').val(feedback.feedback.image)
            $('#FEED_TYPE').val(feedback.feedback.type)
            $('#FEED_ID').val(feedback.feedback.id)
            switch (feedback.feedback.type) {
                case 'ws':
                    $('#CA_RCVTYP').val('S37')
                    break
                case 'telegram':
                    $('#CA_RCVTYP').val('S38')
                    break
                case 'email':
                    $('#CA_RCVTYP').val('S20')
                    break
            }

            $('#CA_RCVDT').datetimepicker({
                format: 'DD-MM-YYYY hh:mm A',
                showMeridian: true,
                todayHighlight: true
            })

            checkJpn()
        }

        $('#CA_ONLINECMPL_AMOUNT').blur(function() {
            $(this).val(amountchange($(this).val()))
        })

        function amountchange(amount) {
            var delimiter = ',' // replace comma if desired
            var a = amount.split('.', 2)
            var d = a[1]
            if (d) {
                if (d.length === 1) {
                    d = d + '0'
                } else if (d.length === 2) {
                    d = d
                } else {
                    d = d
                }
            } else {
                d = '00'
            }
            var i = parseInt(a[0])
            if (isNaN(i)) {
                return ''
            }
            var minus = ''
            if (i < 0) {
                minus = '-'
            }
            i = Math.abs(i)
            var n = new String(i)
            var a = []
            while (n.length > 3) {
                var nn = n.substr(n.length - 3)
                a.unshift(nn)
                n = n.substr(0, n.length - 3)
            }
            if (n.length > 0) {
                a.unshift(n)
            }
            n = a.join(delimiter)
            if (d.length < 1) {
                amount = n
            } else {
                amount = n + '.' + d
            }
            amount = minus + amount
            return amount
        }

        $('select').select2()

    })

    function getDistListFromJpn(StateCd, DistCd) {
        if (StateCd != '' && DistCd != '') {
            $.ajax({
                type: 'GET',
                url: "https://e-aduan.kpdnhep.gov.my/admin-case/getdistlist" + '/' + StateCd,
                dataType: 'json',
                success: function(data) {
                    $('select[name="CA_DISTCD"]').empty()
                    $.each(data, function(key, value) {
                        if (DistCd === value)
                            $('select[name="CA_DISTCD"]').append('<option value="' + value + '" selected="selected">' + key + '</option>')
                        else
                            $('select[name="CA_DISTCD"]').append('<option value="' + value + '">' + key + '</option>')
                    })
                },
                complete: function(data) {
                    $('#CA_DISTCD').val(DistCd).trigger('change')
                }
            })
        } else {
            $('select[name="CA_DISTCD"]').empty()
            $('select[name="CA_DISTCD"]').append('<option value="">-- SILA PILIH --</option>')
        }
    }


    function checkJpn() {
        var DOCNO = $('#CA_DOCNO').val()
        var l = $('.ladda-button-demo').ladda()
        $.ajax({
            type: 'GET',
            url: "https://e-aduan.kpdnhep.gov.my/admin-case/tojpn" + '/' + DOCNO,
            dataType: 'json',
            beforeSend: function() {
                l.ladda('start')
            },
            success: function(data) {
                if (data.Message) {
                    $('#message').text(data.Message)
                } else {
                    $('#message').text('')
                }
                if (feedback.feedback == null) {
                    $('#CA_EMAIL').val(data.EmailAddress) // Email
                    $('#CA_MOBILENO').val(data.MobilePhoneNumber) // Telefon Rumah
                    $('#CA_ADDR').val(data.CorrespondenceAddress1 + '\n' + data.CorrespondenceAddress2) // Alamat
                }
                $('#CA_STATUSPENGADU').val(data.StatusPengadu) // Status Pengadu
                $('#CA_NAME').val(data.Name) // Nama
                $('#CA_AGE').val(data.Age) // Umur
                $('#CA_SEXCD').val(data.Gender).trigger('change') // Jantina
                $('#CA_RACECD').val(data.RaceCd).trigger('change') // Bangsa
                if (data.Warganegara != '') {
                    if (data.Warganegara === '1') { // Warganegara
                        document.getElementById('CA_NATCD1').checked = true
                        $('#warganegara').show()
                        $('#bknwarganegara').hide()
                    } else {
                        document.getElementById('CA_NATCD2').checked = true
                        $('#warganegara').show()
                        $('#bknwarganegara').show()
                    }
                }
                // Standard Field
                $('#CA_POSCD').val(data.CorrespondenceAddressPostcode) // Poskod
                $('#CA_STATECD').val(data.CorrespondenceAddressStateCode).trigger('change') // Negeri
                getDistListFromJpn(data.CorrespondenceAddressStateCode, data.KodDaerah) // Daerah
                // MyIdentity Field
                $('#CA_MYIDENTITY_ADDR').val(data.CorrespondenceAddress1 + '\n' + data.CorrespondenceAddress2) // Alamat MyIdentity
                $('#CA_ADDR_FEED').val(data.CorrespondenceAddress1 + '\n' + data.CorrespondenceAddress2) // Alamat MyIdentity
                $('#CA_MYIDENTITY_POSCD').val(data.CorrespondenceAddressPostcode) // Poskod MyIdentity
                $('#CA_MYIDENTITY_STATECD').val(data.CorrespondenceAddressStateCode) // Negeri MyIdentity
                $('#CA_MYIDENTITY_DISTCD').val(data.KodDaerah) // Daerah MyIdentity
                l.ladda('stop')
            },
            error: function(data) {
                console.log(data)
                if (data.status == '500') {
                    alert(data.statusText)
                }
                l.ladda('stop')
            },
            complete: function(data) {
                console.log(data)
                l.ladda('stop')
            }
        })
    }

    //    $('#CheckJpn').on('click', function (e) {
    $('#CA_DOCNO').blur(function() {
        checkJpn()
    })

    function check(value) {
        if (value === '1') {
            $('#warganegara').show()
            $('#bknwarganegara').hide()
        } else {
            $('#warganegara').show()
            $('#bknwarganegara').show()
        }
    }

    function btncontinueclick() {
        document.getElementById('btnsave').style.visibility = 'visible'
        document.getElementById('btnupdate').style.visibility = 'visible'
        document.getElementById('btncontinue').style.visibility = 'hidden'
        $('.form-control').attr('readonly', true)
    }

    function btnupdateclick() {
        document.getElementById('btnsave').style.visibility = 'hidden'
        document.getElementById('btnupdate').style.visibility = 'hidden'
        document.getElementById('btncontinue').style.visibility = 'visible'
        $('.form-control').attr('readonly', false)
    }

    function onlinecmplind() {
        if (document.getElementById('CA_ONLINECMPL_IND').checked)
            $('#div_CA_ONLINECMPL_CASENO').show()
        else
            $('#div_CA_ONLINECMPL_CASENO').hide()
    }


    function onlineaddind() {
        if (document.getElementById('CA_ONLINEADD_IND').checked) {
            $('#div_CA_AGAINSTADD').show()
            $('#div_CA_AGAINST_POSTCD').show()
            $('#div_CA_AGAINST_STATECD').show()
            $('#div_CA_AGAINST_DISTCD').show()
        } else {
            $('#div_CA_AGAINSTADD').hide()
            $('#div_CA_AGAINST_POSTCD').hide()
            $('#div_CA_AGAINST_STATECD').hide()
            $('#div_CA_AGAINST_DISTCD').hide()
        }
    }


    $(function() {
        $('#national1').on('click', function(e) {
            $('#warganegara').show()
            $('#bknwarganegara').hide()
        })
        $('#national2').on('click', function(e) {
            $('#warganegara').hide()
            $('#bknwarganegara').show()
        })

        $('#CA_ONLINECMPL_PROVIDER').on('change', function(e) {
            var CA_ONLINECMPL_PROVIDER = $(this).val()
            if (CA_ONLINECMPL_PROVIDER === '999')
                $('label[for=\'CA_ONLINECMPL_URL\']').addClass('required')
            else
                $('label[for=\'CA_ONLINECMPL_URL\']').removeClass('required')
        })

        $('#CA_ONLINECMPL_PYMNTTYP').on('change', function(e) {
            var CA_ONLINECMPL_PYMNTTYP = $(this).val();
            var requiredPaymentTypes = ['CRC', 'OTF', 'CDM'];
            var isInclude = requiredPaymentTypes.includes(CA_ONLINECMPL_PYMNTTYP);
            // if (CA_ONLINECMPL_PYMNTTYP === 'COD' || CA_ONLINECMPL_PYMNTTYP === '') {
            //   $('label[for=\'CA_ONLINECMPL_BANKCD\']').removeClass('required')
            //   $('label[for=\'CA_ONLINECMPL_ACCNO\']').removeClass('required')
            // } else {
            //   $('label[for=\'CA_ONLINECMPL_BANKCD\']').addClass('required')
            //   $('label[for=\'CA_ONLINECMPL_ACCNO\']').addClass('required')
            // }
            if (isInclude) {
                $('label[for="CA_ONLINECMPL_BANKCD"]').addClass('required');
                $('label[for="CA_ONLINECMPL_ACCNO"]').addClass('required');
            } else {
                $('label[for="CA_ONLINECMPL_BANKCD"]').removeClass('required');
                $('label[for="CA_ONLINECMPL_ACCNO"]').removeClass('required');
            }
        })

        $('#CA_RCVTYP').on('change', function(e) {
            var CA_RCVTYP = $(this).val()

            if (CA_RCVTYP === 'S14') {
                $('#div_CA_BPANO').show()
            } else {
                $('#div_CA_BPANO').hide()
            }

            if (CA_RCVTYP === 'S33') {
                $('#div_CA_SERVICENO').show()
            } else {
                $('#div_CA_SERVICENO').hide()
            }
        })

        $('#CA_CMPLCAT').on('change', function(e) {
            var CA_CMPLCAT = $(this).val()
            if (CA_CMPLCAT) {
                $.ajax({
                    type: 'GET',
                    url: "https://e-aduan.kpdnhep.gov.my/admin-case/getcmpllist" + '/' + CA_CMPLCAT,
                    dataType: 'json',
                    success: function(data) {
                        // console.log(data)
                        $('select[name="CA_CMPLCD"]').empty()
                        $.each(data, function(key, value) {
                            if (value == '0') {
                                $('select[name="CA_CMPLCD"]').append('<option value="">' + key + '</option>')
                                // $('select[name="CA_CMPLCD"]').trigger('change')
                            } else {
                                $('select[name="CA_CMPLCD"]').append('<option value="' + value + '">' + key + '</option>')
                                // $('select[name="CA_CMPLCD"]').trigger('change')
                            }
                        })
                    },
                    complete: function(data) {
                        $('select[name="CA_CMPLCD"]').trigger('change')
                    }
                })
                if (CA_CMPLCAT === 'BPGK 01' || CA_CMPLCAT === 'BPGK 03') {
                    $.ajax({
                        type: 'GET',
                        url: "https://e-aduan.kpdnhep.gov.my/admin-case/getcmplkeywordlist" + '/' + CA_CMPLCAT,
                        dataType: 'json',
                        success: function(data) {
                            // console.log(data)
                            $('select[name="CA_CMPLKEYWORD"]').empty()
                            $('select[name="CA_CMPLKEYWORD"]').append('<option value="">-- SILA PILIH --</option>')
                            $.each(data, function(key, value) {
                                if (value == '0') {
                                    $('select[name="CA_CMPLKEYWORD"]').append('<option value="">' + key + '</option>')
                                    $('select[name="CA_CMPLKEYWORD"]').trigger('change')
                                } else {
                                    $('select[name="CA_CMPLKEYWORD"]').append('<option value="' + value + '">' + key + '</option>')
                                    $('select[name="CA_CMPLKEYWORD"]').trigger('change')
                                }
                            })
                        },
                        complete: function(data) {
                            $('select[name="CA_CMPLKEYWORD"]').trigger('change')
                        }
                    })
                    $('#div_CA_CMPLKEYWORD').show()
                } else {
                    $('select[name="CA_CMPLKEYWORD"]').empty()
                    $('select[name="CA_CMPLKEYWORD"]').append('<option value="">-- SILA PILIH --</option>')
                    $('select[name="CA_CMPLKEYWORD"]').trigger('change')
                    $('#div_CA_CMPLKEYWORD').hide()
                }
            } else {
                $('select[name="CA_CMPLCD"]').empty()
                $('select[name="CA_CMPLCD"]').append('<option value="">-- SILA PILIH --</option>')
                $('select[name="CA_CMPLCD"]').trigger('change')
                $('#div_CA_CMPLKEYWORD').hide()
            }
            if (CA_CMPLCAT === 'BPGK 08') {
                $('#CA_TTPMTYP').show()
                $('#CA_TTPMNO').show()
            } else {
                $('#CA_TTPMTYP').hide()
                $('#CA_TTPMNO').hide()
            }
            if (CA_CMPLCAT === 'BPGK 19') {
                if (document.getElementById('CA_ONLINECMPL_IND').checked)
                    $('#div_CA_ONLINECMPL_CASENO').show()
                else
                    $('#div_CA_ONLINECMPL_CASENO').hide()
                $('#checkpernahadu').show()
                $('#checkinsertadd').show()
                $('#div_CA_ONLINECMPL_PROVIDER').show()
                $('#div_CA_ONLINECMPL_URL').show()
                //                $('#div_CA_ONLINECMPL_AMOUNT').show();
                $('#div_CA_ONLINECMPL_BANKCD').show()
                $('#div_CA_ONLINECMPL_PYMNTTYP').show()
                $('#div_CA_ONLINECMPL_ACCNO').show()
                $('#div_CA_AGAINST_PREMISE').hide()
                //                $('#div_CA_AGAINSTADD').hide();
                //                $('#div_CA_AGAINST_POSTCD').hide();
                //                $('#div_CA_AGAINST_STATECD').hide();
                //                $('#div_CA_AGAINST_DISTCD').hide();
                $('#div_SERVICE_PROVIDER_INFO').show()
                $('#div_ONLINECMPL').show()
                if (document.getElementById('CA_ONLINEADD_IND').checked) {
                    $('#div_CA_AGAINSTADD').show()
                    $('#div_CA_AGAINST_POSTCD').show()
                    $('#div_CA_AGAINST_STATECD').show()
                    $('#div_CA_AGAINST_DISTCD').show()
                } else {
                    $('#div_CA_AGAINSTADD').hide()
                    $('#div_CA_AGAINST_POSTCD').hide()
                    $('#div_CA_AGAINST_STATECD').hide()
                    $('#div_CA_AGAINST_DISTCD').hide()
                }
            } else {
                $('#checkpernahadu').hide()
                $('#checkinsertadd').hide()
                $('#div_CA_ONLINECMPL_CASENO').hide()
                $('#div_CA_ONLINECMPL_PROVIDER').hide()
                $('#div_CA_ONLINECMPL_URL').hide()
                //                $('#div_CA_ONLINECMPL_AMOUNT').hide();
                $('#div_CA_ONLINECMPL_BANKCD').hide()
                $('#div_CA_ONLINECMPL_PYMNTTYP').hide()
                $('#div_CA_ONLINECMPL_ACCNO').hide()
                $('#div_CA_AGAINST_PREMISE').show()
                $('#div_CA_AGAINSTADD').show()
                $('#div_CA_AGAINST_POSTCD').show()
                $('#div_CA_AGAINST_STATECD').show()
                $('#div_CA_AGAINST_DISTCD').show()
                $('#div_SERVICE_PROVIDER_INFO').hide()
                $('#div_ONLINECMPL').hide()
            }
        })
    })

    function myFunction(id) {
        $.ajax({
            url: "https://e-aduan.kpdnhep.gov.my/admin-case/getuserdetail" + '/' + id,
            dataType: 'json',
            success: function(data) {
                $.each(data, function(key, value) {
                    document.getElementById('RcvByName').value = key
                    document.getElementById('RcvById').value = value
                })
                $('#carian-penerima').modal('hide')
            }
        })
    }

    $(document).ready(function() {

        $('#UserSearchModal').on('click', function(e) {
            $('#carian-penerima').modal()
        })

        $('#rcvdt .input-daterange').datepicker({
            format: 'dd-mm-yyyy',
            //            format: 'yyyy-mm-dd',
            todayHighlight: true,
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        })

        $('#CA_STATECD').on('change', function(e) {
            var CA_STATECD = $(this).val()
            $.ajax({
                type: 'GET',
                url: "https://e-aduan.kpdnhep.gov.my/admin-case/getdistlist" + '/' + CA_STATECD,
                dataType: 'json',
                success: function(data) {
                    $('select[name="CA_DISTCD"]').empty()
                    $.each(data, function(key, value) {
                        $('select[name="CA_DISTCD"]').append('<option value="' + value + '">' + key + '</option>')
                    })
                },
                complete: function(data) {
                    $('#CA_DISTCD').trigger('change')
                }
            })
        })

        $('#CA_AGAINST_STATECD').on('change', function(e) {
            var CA_AGAINST_STATECD = $(this).val()
            $.ajax({
                type: 'GET',
                url: "https://e-aduan.kpdnhep.gov.my/admin-case/getdistlist" + '/' + CA_AGAINST_STATECD,
                dataType: 'json',
                success: function(data) {
                    $('select[name="CA_AGAINST_DISTCD"]').empty()
                    $.each(data, function(key, value) {
                        $('select[name="CA_AGAINST_DISTCD"]').append('<option value="' + value + '">' + key + '</option>')
                    })
                },
                complete: function(data) {
                    $('#CA_AGAINST_DISTCD').trigger('change')
                }
            })
        })

        var oTable = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            bFilter: false,
            aaSorting: [],
            pagingType: 'full_numbers',
            dom: '<\'row\'<\'col-sm-6\'i><\'col-sm-6\'<\'pull-right\'l>>>' +
                '<\'row\'<\'col-sm-12\'tr>>' +
                '<\'row\'<\'col-sm-12\'p>>',
            language: {
                lengthMenu: 'Memaparkan _MENU_ rekod',
                zeroRecords: 'Tiada rekod ditemui',
                info: 'Memaparkan _START_-_END_ daripada _TOTAL_ rekod',
                infoEmpty: 'Tiada rekod ditemui',
                infoFiltered: '(Paparan daripada _MAX_ jumlah rekod)',
                paginate: {
                    previous: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
                    next: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
                    first: 'Pertama',
                    last: 'Terakhir'
                }
            },
            ajax: {
                url: "https://e-aduan.kpdnhep.gov.my/admin-case/getdatatableuser",
                data: function(d) {
                    d.name = $('#name').val()
                    d.icnew = $('#icnew').val()
                    //                    d.state_cd = $('#state_cd_user').val();
                    d.state_cd = '16'
                    //                    d.brn_cd = $('#brn_cd').val();
                    d.brn_cd = 'WHQR5'
                }
            },
            columns: [{
                    data: 'DT_Row_Index',
                    name: 'id',
                    width: '5%',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'state_cd',
                    name: 'state_cd'
                },
                {
                    data: 'brn_cd',
                    name: 'brn_cd'
                },
                {
                    data: 'action',
                    name: 'action',
                    searchable: false,
                    orderable: false,
                    width: '8%'
                }
            ]
        })

        $('#state_cd_user').on('change', function(e) {
            var state_cd = $(this).val()
            $.ajax({
                type: 'GET',
                url: "https://e-aduan.kpdnhep.gov.my/user/getbrnlist" + '/' + state_cd,
                dataType: 'json',
                success: function(data) {
                    $('select[name="brn_cd"]').empty()
                    $.each(data, function(key, value) {
                        $('select[name="brn_cd"]').append('<option value="' + key + '">' + value + '</option>')
                    })
                }
            })
        })

        $('#resetbtn').on('click', function(e) {
            document.getElementById('search-form').reset()
            oTable.draw()
            e.preventDefault()
        })

        $('#search-form').on('submit', function(e) {
            oTable.draw()
            e.preventDefault()
        })
    })

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false
        }
        return true
    }

    function isNumberKey1(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 46) {
            return false
        }
        return true
    }

    function selectCategoryOrPremise(category, premise) {
        switch (category) {
            case 'BPGK 19':
                if (document.getElementById('CA_ONLINECMPL_IND').checked)
                    $('#div_CA_ONLINECMPL_CASENO').show();
                else
                    $('#div_CA_ONLINECMPL_CASENO').hide();
                $("#checkpernahadu").show();
                $("#checkinsertadd").show();
                $('#div_CA_ONLINECMPL_PROVIDER').show();
                $('#div_CA_ONLINECMPL_URL').show();
                $('#div_CA_ONLINECMPL_AMOUNT').show();
                $('#div_CA_ONLINECMPL_BANKCD').show();
                $('#div_CA_ONLINECMPL_PYMNTTYP').show();
                $('#div_CA_ONLINECMPL_ACCNO').show();
                $('#div_CA_AGAINST_PREMISE').hide();
                $('#div_CA_AGAINSTADD').hide();
                $('#div_CA_AGAINST_POSTCD').hide();
                $('#div_CA_AGAINST_STATECD').hide();
                $('#div_CA_AGAINST_DISTCD').hide();
                $("label[for='CA_ONLINECMPL_URL']").removeClass("required");
                $('#div_SERVICE_PROVIDER_INFO').show();
                $('#div_ONLINECMPL').show();
                if (document.getElementById('CA_ONLINEADD_IND').checked) {
                    $('#div_CA_AGAINSTADD').show();
                    $('#div_CA_AGAINST_POSTCD').show();
                    $('#div_CA_AGAINST_STATECD').show();
                    $('#div_CA_AGAINST_DISTCD').show();
                } else {
                    $('#div_CA_AGAINSTADD').hide();
                    $('#div_CA_AGAINST_POSTCD').hide();
                    $('#div_CA_AGAINST_STATECD').hide();
                    $('#div_CA_AGAINST_DISTCD').hide();
                }
                break;
            default:
                switch (premise) {
                    case 'P25':
                        onlinecmplind();
                        $("#checkpernahadu").show();
                        $("#checkinsertadd").show();
                        $('#div_CA_ONLINECMPL_PROVIDER').show();
                        $('#div_CA_ONLINECMPL_URL').show();
                        $('#div_CA_ONLINECMPL_AMOUNT').show();
                        $('#div_CA_ONLINECMPL_BANKCD').hide();
                        $('#div_CA_ONLINECMPL_PYMNTTYP').hide();
                        $('#div_CA_ONLINECMPL_ACCNO').hide();
                        $('#div_CA_AGAINST_PREMISE').show();
                        $('#div_CA_AGAINSTADD').hide();
                        $('#div_CA_AGAINST_POSTCD').hide();
                        $('#div_CA_AGAINST_STATECD').hide();
                        $('#div_CA_AGAINST_DISTCD').hide();
                        $("label[for='CA_ONLINECMPL_URL']").removeClass("required");
                        $('#div_SERVICE_PROVIDER_INFO').show();
                        $('#div_ONLINECMPL').show();
                        onlineaddind();
                        break;
                    default:
                        $("#checkpernahadu").hide();
                        $("#checkinsertadd").hide();
                        $('#div_CA_ONLINECMPL_CASENO').hide();
                        $('#div_CA_ONLINECMPL_PROVIDER').hide();
                        $('#div_CA_ONLINECMPL_URL').hide();
                        $('#div_CA_ONLINECMPL_AMOUNT').hide();
                        $('#div_CA_ONLINECMPL_BANKCD').hide();
                        $('#div_CA_ONLINECMPL_PYMNTTYP').hide();
                        $('#div_CA_ONLINECMPL_ACCNO').hide();
                        $('#div_CA_AGAINST_PREMISE').show();
                        $('#div_CA_AGAINSTADD').show();
                        $('#div_CA_AGAINST_POSTCD').show();
                        $('#div_CA_AGAINST_STATECD').show();
                        $('#div_CA_AGAINST_DISTCD').show();
                        $('#div_SERVICE_PROVIDER_INFO').hide();
                        $('#div_ONLINECMPL').hide();
                        break;
                }
                break;
        }
    }
</script>

<!-- Dual List Script-->
<script>
    $(document).ready(function() {
        $('.dual_select').bootstrapDualListbox({
            selectorMinimalHeight: 160
        })
        $(document).idleTimer(1200000)
    })
    $(document).on('idle.idleTimer', function(event, elem, obj) {
        swal({
                title: 'Peringatan',
                text: 'Kerana anda tidak aktif menggunakan sistem, sesi anda akan tamat.',
                type: 'warning',
                timer: 600000,
                showCancelButton: true,
                cancelButtonText: 'Kekal Di Log Masuk',
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Log Keluar'
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location = '/authlogout'
                } else {
                    window.location = ''
                }
            })
    })
</script>

<style>
    body.DTTT_Print {
        background: #fff;

    }

    .DTTT_Print #page-wrapper {
        margin: 0;
        background: #fff;
    }

    button.DTTT_button,
    div.DTTT_button,
    a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    button.DTTT_button:hover,
    div.DTTT_button:hover,
    a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }

    label.required:after {
        color: #cc0000;
        content: "*";
        font-weight: bold;
        margin-left: 5px;
    }

    label.required1:after {
        color: #cc0000;
        content: "**";
        font-weight: bold;
        margin-left: 5px;
    }

    #idletimer_warning_dialog {
        background-color: white;
    }

    .ui-dialog-buttonset {
        background-color: white;
        text-align: center;
    }
</style>