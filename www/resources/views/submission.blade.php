@extends('layout') 
@section('content')
<!--Header-area-->
<header class="header-area overlay small-header relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        
        </div>
    </header>
    <!--Header-area/-->

<div class="container">
  <div class="row">
    <br><br>
      <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
          <div class="page-title">
              <h2>Submission</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere
                  harum fugiat!</p>
          </div>
      </div>
      </div>
      
@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'submission.store']) !!}

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('fasta') ? 'has-error' : '' }}">
{!! Form::label('Fasta Sequence(s):') !!}
{!! Form::textarea('fasta') !!}
<span class="text-danger">{{ $errors->first('fasta') }}</span>
</div>
<h4> Or </h4>
<div class="form-group {{ $errors->has('file') ? 'has-error' : '' }}">
{!! Form::label('Fasta File:') !!}
{!! Form::file('file')!!}
    <p class="help-block">
        File in FASTA format with maximum size 2,048KiB.
    </p>
</div>

<div class="form-group">
<button type="submit" class="btn btn-success">Submit</button>
</div>
           <p><b>Sample fasta Sequence(s)</b></p>
            <pre>
<b>&gt;sp|O05617|VANB_PSEUH Vanillate O-demethylase oxidoreductase OS=Pseudomonas sp. (strain HR199 / DSM 7063) GN=vanB PE=3 SV=1
MIEVIISAMRLVAQDIISLEFVRADGGLLPPVEAGAHVDVHLPGGLIRQYSLWNQPGAQS
HYCIGVLKDPASRGGSKAVHENLRVGMRVQISEPRNLFPLEEGVERSLLFAGGIGITPIL
CMAQELAAREQDFELHYCARSTDRAAFVEWLKVCDFADHVRFHFDNGPDQQKLNAAALLA
AEAEGTHLYVCGPGGFMGHVLDTAKEQGWADNRLHREYFAAAPNVSADDGSFEVRIHSTG
QVLQVPADQTVSQVLDAAGIIVPVSCEQGICGTCITRVVDGEPDHRDFFLTDAEKAKNDQ
FTPCCSRAKSACLVLDL
<b>&gt;sp|O05617|VANB_PSEUH Vanillate O-demethylase oxidoreductase OS=Pseudomonas sp. (strain HR199 / DSM 7063) GN=vanB PE=3 SV=1
MIEVIISAMRLVAQDIISLEFVRADGGLLPPVEAGAHVDVHLPGGLIRQYSLWNQPGAQS
HYCIGVLKDPASRGGSKAVHENLRVGMRVQISEPRNLFPLEEGVERSLLFAGGIGITPIL
CMAQELAAREQDFELHYCARSTDRAAFVEWLKVCDFADHVRFHFDNGPDQQKLNAAALLA
AEAEGTHLYVCGPGGFMGHVLDTAKEQGWADNRLHREYFAAAPNVSADDGSFEVRIHSTG
QVLQVPADQTVSQVLDAAGIIVPVSCEQGICGTCITRVVDGEPDHRDFFLTDAEKAKNDQ
FTPCCSRAKSACLVLDL
</pre>

{!! Form::close() !!}

</div>

@endsection