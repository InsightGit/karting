# karting
An emulated game server for LittleBigPlanet™Karting on the PS3®.

## How to Connect
### Instructions for OFW/CEX (NOT Jailbroken; HAN included) systems…
LittleBigPlanet™Karting uses HTTPS connections when connecting online; therefore if the host were to be spoofed using a proxy then the DNS would resolve, however the server's SSL certificate would not match the host URL; causing an SSL error. Creating self-signed SSL certificates would also fail because you would need it to be signed by one of the PS3's trusted CA's (internal Certificate Authority list; which *currently* cannot be edited). Only way around this is to edit and **resign** the game's EBOOT.BIN file (game executable) to use HTTP only. OFW/CEX/HAN **cannot boot resigned** EBOOTs, for that you would need a *HEN* (Homebrew ENabler) exploit… which currently does not exist.

Wait until a HEN exploit exists or a method to edit the PS3's CA list. Both of which is unlikely so you might as well jailbreak your PS3. You no longer need to open up your PS3 to downgrade or make it CEX/DEX. If your PS3 is a *compatible* model capable of downgrading to 3.55 or below, Google how to jailbreak your PS3 using a WebKit exploit. **Make sure you have CFW syscalls __disabled__ when playing online and avoid syncing trophies, otherwise you will get banned.** 

### Instructions for CFW/DEX (Jailbroken) systems…
`FIX ME CFW INSTRUCTIONS`

## License
MIT. I did not create any of the games in question nor am I affiliated with any of the developers of these video games or systems. Nothing malicious is intended.
