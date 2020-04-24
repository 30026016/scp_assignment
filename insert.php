<?php include 'template/header.php'; ?>

<!-- Add style -->
<style type='text/css'>
    .clsSubject{
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: whitesmoke;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;    
    }

    .clsH1{
        color: whitesmoke;
    }

</style>

<!-- Insert form with design -->
    <div class="row">
        <div  class="col">
            <h1 class="clsH1">SCP Subject Form</h1>
            <form name="insert" method="POST" action="connection.php" class="needs-validation">
                <div class="p-3 mb-2 bg-info text-white">
                    <label for="subjectNumber"><strong>Subject Number</strong></label>
                    <input type="text" class="clsSubject" name="Item_No" class="form-control" id="subjectNumber" placeholder="Use the following format SCP-###" required>
                </div>
                <div class="p-3 mb-2 bg-info text-white">
                    <label for="subjectClassType"><strong>Object Class</strong></label>
                    <input type="text" class="clsSubject" name="Object_class" class="form-control" id="subjectClassType" placeholder="Class types: Euclid, Safe, Keter, Thaumiel, Neutralized" required>
                </div>
                <div class="p-3 mb-2 bg-info text-white">
                    <label for="subjectImageLink"><strong>Subject Image Link (if any available)</strong></label>
                    <input type="text" class="clsSubject" name="Subject_image_path" class="form-control" id="subjectImageLink" placeholder="Use following format: images/image_name.(gif, jpg, png)">
                </div>
                <div class="p-3 mb-2 bg-info text-white">
                    <label for="subjectProcedures"><strong>Containment Procedures</strong></label>
                    <textarea name="Procedures" class="clsSubject" rows="5" class="form-control" id="subjectProcedures" placeholder="Separate Containment Procedures Paragraphs with /n" required></textarea>
                </div>
                <div class="p-3 mb-2 bg-info text-white">
                    <label for="subjectDescription"><strong>Subject Description</strong></label>
                    <textarea name="Description" class="clsSubject" rows="5" class="form-control" id="subjectDescription" placeholder="Separate Subject Description Paragraphs with /n" required></textarea>
                </div>
                <div class="p-3 mb-2 bg-info text-white">
                    <label for="subjectReference"><strong>Reference</strong></label>
                    <textarea name="Reference" class="clsSubject" rows="5" class="form-control" id="subjectReference" placeholder="Separate Reference Paragraphs with /n"></textarea>
                </div>

                <div class="p-3 mb-2 bg-info text-white">
                    <label for="subjectAdditional"><strong>Additional Notes</strong></label>
                    <textarea name="Additional_Notes" class="clsSubject" rows="5" class="form-control" id="subjectAdditional" placeholder="Separate Additional Notes Paragraphs with /n"></textarea>
                </div>

                <div class="p-3 mb-2 bg-info text-white">
                    <label for="subjectAppendix"><strong>Appendix</strong></label>
                    <textarea name="Appendix" class="clsSubject" rows="5" class="form-control" id="subjectAppendix" placeholder="Separate Appendix Paragraphs with /n"></textarea>
                </div>

                <input type="submit" class="btn btn-primary" data-toggle="button" name="submit" value="Submit">
            </form>
        </div>
    </div>
   <?php include 'template/footer.php'; ?>