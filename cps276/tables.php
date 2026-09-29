<?php
    function evens(int $begin, int $end){
        $testarr = [];
        $result = "Even Numbers: ";
        for($i = $begin; $i <= $end; $i++){
            $testarr[] = $i;
        } 
        foreach($testarr as $testnum){
            if($testnum == 2){ $result.=" 2";}
            elseif($testnum % 2 == 0){
                $result .=" - $testnum";
            }
        }
        return $result;
    }
    $the_array =  evens(1, 50);
    $format = <<<END
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

    </form>
    END;
    function create_table(int $rows, int $cols){
        $output = "<table>";
        for($rnum = 1; $rnum <=$rows; $rnum++){
            $output.="<tr>";
            for($cnum = 1; $cnum <=$cols; $cnum++){
                $output .="<td> Row $rnum, Col $cnum </td>";
            }
            $output.="</tr>";
        }
        $output .= "</table>";
        return $output;
    }
    $the_table = create_table(8,6)
?>
<!DOCTYPE html><html>
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></head>

    <p>
    <?php echo $the_array;?></p>
    <br>
    <?php echo $format;?><br>
    <?php echo $the_table;?>
</html>