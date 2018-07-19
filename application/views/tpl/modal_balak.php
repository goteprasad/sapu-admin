<!-- Modal -->

<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">बालक जन्म नोंद</h5>
        <button type="button" class="close" data-toggle="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p><strong>गरोदर मातेचे नाव</strong> : &nbsp;&nbsp;<?php echo $name_of_mother; ?>  </p>
          <p><strong>नोंदणीचा महिना</strong> : &nbsp;&nbsp; <?php echo $month_of_registration; ?></p>
          <p><strong>पाळीची तारीख</strong> : &nbsp;&nbsp; <?php echo $date_of_period; ?></p>
          <p><strong>बाळंतपणाची तारीख</strong> : &nbsp;&nbsp; <?php echo $delivery_date; ?></p>
          <p><strong>ठिकाण</strong> : &nbsp;&nbsp; <?php echo $place; ?></p>
          <p><strong>मातेचे वय</strong> : &nbsp;&nbsp; <?php echo $age; ?></p>
          <p><strong>खेप</strong> : &nbsp;&nbsp; <?php echo $delivery_count; ?></p>
          <p><strong>बाळाचे जन्म वजन</strong> : &nbsp;&nbsp; <?php echo $birth_weight; ?> kg</p>
          <p><strong>रक्त लघवी तपासणी</strong> : &nbsp;&nbsp; <?php echo $blood_urine_test; ?></p>
          <p><strong>बाळाचे लिंग</strong> : &nbsp;&nbsp; <?php echo $gender; ?></p>
      </div>
    </div>
  </div>