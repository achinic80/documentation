    <b> HELP - ΟΔΗΓΙΕΣ </b>
    
     REQUEST['dir']
     REQUEST['filename']
     REQUEST['fun']
                 
    δημιουργησα μια php που ψάχνει όλα τα directories και
    φέρνει όλα τα αρχεία ωστε να βλεπουμε ποτε αλλαξε το καθενα και πόσο μέγεθος έχει
    όπου τρέχει .... ψάχνει απο κάτω.... 
    
    ΔΕΣ  και το  curl_filelist_dashboard.php      με αυτό συνεργάζεται.
    
| ----------- | ----------- | ----------- | ----------- |
| getDirContents(\$dir)       | -> | φορτώνει τα αρχεία στον κεντρικό πίνακα    \$getContents  
  |  ./curl_filelist.php?fun=getDirContents&dir=mv/library 
     ./curl_filelist.php?fun=getDirContents  |
| getfilename_in_directory(\$getContents, \$filename, \$directory)  | -> 
     | Φέρνει μόνο όπου υπάρχει το αρχείο \$filename μέσα στο  \$directory    ΜΟΝΟ |
     
| getfilename(\$getContents, \$filename)          |  ->  |  Φέρνει μόνο όπου υπάρχει το αρχείο \$filename                          |
|get_all_filelist(\$getContents)                 |  ->  |  Φέρνει τα αρχεία από τον κεντρικό πίνακα    \$getContents               | 
|get_dir_files(\$getContents, \$directory)       |  ->  |  Φέρνει ότι αρχείο υπάρχει μέσα στο \$directory και απο κάτω του         | 
| get_dir_ONLY_files(\$getContents, \$directory)  |  ->  |  Φέρνει ότι αρχείο υπάρχει μέσα στο \$directory ΜΟΝΟ και ΟΧΙ  απο κάτω του | 

