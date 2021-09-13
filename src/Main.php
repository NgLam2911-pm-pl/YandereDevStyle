<?php
declare(strict_types=1);

namespace NgLamVN\YandereDevStyle;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase implements Listener{

	/** @var int[] */
	protected array $number = [];

	protected function onEnable() : void{
		$this->number[1] = mt_rand(0, 1000);
		$this->number[2] = mt_rand(0, 1000);
		$this->number[3] = mt_rand(0, 1000);
		$this->number[4] = mt_rand(0, 1000);
		$this->number[5] = mt_rand(0, 1000);
		$this->number[6] = mt_rand(0, 1000);
		$this->number[7] = mt_rand(0, 1000);
		$this->number[8] = mt_rand(0, 1000);
		$this->number[9] = mt_rand(0, 1000);
		$this->number[10] = mt_rand(0, 1000);
		$this->number[11] = mt_rand(0, 1000);
		$this->number[12] = mt_rand(0, 1000);
		$this->number[13] = mt_rand(0, 1000);
		$this->number[14] = mt_rand(0, 1000);
		$this->number[15] = mt_rand(0, 1000);
		$this->number[16] = mt_rand(0, 1000);
		$this->number[17] = mt_rand(0, 1000);
		$this->number[18] = mt_rand(0, 1000);
		$this->number[19] = mt_rand(0, 1000);
		$this->number[20] = mt_rand(0, 1000);
		$this->number[21] = mt_rand(0, 1000);
		$this->number[22] = mt_rand(0, 1000);
		$this->number[23] = mt_rand(0, 1000);
		$this->number[24] = mt_rand(0, 1000);
		$this->number[25] = mt_rand(0, 1000);
		$this->number[26] = mt_rand(0, 1000);
		$this->number[27] = mt_rand(0, 1000);
		$this->number[28] = mt_rand(0, 1000);
		$this->number[29] = mt_rand(0, 1000);
		$this->number[30] = mt_rand(0, 1000);
		$this->number[31] = mt_rand(0, 1000);
		$this->number[32] = mt_rand(0, 1000);
		$this->number[33] = mt_rand(0, 1000);
		$this->number[34] = mt_rand(0, 1000);
		$this->number[35] = mt_rand(0, 1000);
		$this->number[36] = mt_rand(0, 1000);
		$this->number[37] = mt_rand(0, 1000);
		$this->number[38] = mt_rand(0, 1000);
		$this->number[39] = mt_rand(0, 1000);
		$this->number[40] = mt_rand(0, 1000);
		$this->number[41] = mt_rand(0, 1000);
		$this->number[42] = mt_rand(0, 1000);
		$this->number[43] = mt_rand(0, 1000);
		$this->number[44] = mt_rand(0, 1000);
		$this->number[45] = mt_rand(0, 1000);
		$this->number[46] = mt_rand(0, 1000);
		$this->number[47] = mt_rand(0, 1000);
		$this->number[48] = mt_rand(0, 1000);
		$this->number[49] = mt_rand(0, 1000);
		$this->number[50] = mt_rand(0, 1000);
		$this->number[51] = mt_rand(0, 1000);
		$this->number[52] = mt_rand(0, 1000);
		$this->number[53] = mt_rand(0, 1000);
		$this->number[54] = mt_rand(0, 1000);
		$this->number[55] = mt_rand(0, 1000);
		$this->number[56] = mt_rand(0, 1000);
		$this->number[57] = mt_rand(0, 1000);
		$this->number[58] = mt_rand(0, 1000);
		$this->number[59] = mt_rand(0, 1000);
		$this->number[60] = mt_rand(0, 1000);
		$this->number[61] = mt_rand(0, 1000);
		$this->number[62] = mt_rand(0, 1000);
		$this->number[63] = mt_rand(0, 1000);
		$this->number[64] = mt_rand(0, 1000);
		$this->number[65] = mt_rand(0, 1000);
		$this->number[66] = mt_rand(0, 1000);
		$this->number[67] = mt_rand(0, 1000);
		$this->number[68] = mt_rand(0, 1000);
		$this->number[69] = mt_rand(0, 1000);
		$this->number[70] = mt_rand(0, 1000);
		$this->number[71] = mt_rand(0, 1000);
		$this->number[72] = mt_rand(0, 1000);
		$this->number[73] = mt_rand(0, 1000);
		$this->number[74] = mt_rand(0, 1000);
		$this->number[75] = mt_rand(0, 1000);
		$this->number[76] = mt_rand(0, 1000);
		$this->number[77] = mt_rand(0, 1000);
		$this->number[78] = mt_rand(0, 1000);
		$this->number[79] = mt_rand(0, 1000);
		$this->number[80] = mt_rand(0, 1000);
		$this->number[81] = mt_rand(0, 1000);
		$this->number[82] = mt_rand(0, 1000);
		$this->number[83] = mt_rand(0, 1000);
		$this->number[84] = mt_rand(0, 1000);
		$this->number[85] = mt_rand(0, 1000);
		$this->number[86] = mt_rand(0, 1000);
		$this->number[87] = mt_rand(0, 1000);
		$this->number[88] = mt_rand(0, 1000);
		$this->number[89] = mt_rand(0, 1000);
		$this->number[90] = mt_rand(0, 1000);
		$this->number[91] = mt_rand(0, 1000);
		$this->number[92] = mt_rand(0, 1000);
		$this->number[93] = mt_rand(0, 1000);
		$this->number[94] = mt_rand(0, 1000);
		$this->number[95] = mt_rand(0, 1000);
		$this->number[96] = mt_rand(0, 1000);
		$this->number[97] = mt_rand(0, 1000);
		$this->number[98] = mt_rand(0, 1000);
		$this->number[99] = mt_rand(0, 1000);
		$this->number[100] = mt_rand(0, 1000);
		$this->number[101] = mt_rand(0, 1000);
		$this->number[102] = mt_rand(0, 1000);
		$this->number[103] = mt_rand(0, 1000);
		$this->number[104] = mt_rand(0, 1000);
		$this->number[105] = mt_rand(0, 1000);
		$this->number[106] = mt_rand(0, 1000);
		$this->number[107] = mt_rand(0, 1000);
		$this->number[108] = mt_rand(0, 1000);
		$this->number[109] = mt_rand(0, 1000);
		$this->number[110] = mt_rand(0, 1000);
		$this->number[111] = mt_rand(0, 1000);
		$this->number[112] = mt_rand(0, 1000);
		$this->number[113] = mt_rand(0, 1000);
		$this->number[114] = mt_rand(0, 1000);
		$this->number[115] = mt_rand(0, 1000);
		$this->number[116] = mt_rand(0, 1000);
		$this->number[117] = mt_rand(0, 1000);
		$this->number[118] = mt_rand(0, 1000);
		$this->number[119] = mt_rand(0, 1000);
		$this->number[120] = mt_rand(0, 1000);
		$this->number[121] = mt_rand(0, 1000);
		$this->number[122] = mt_rand(0, 1000);
		$this->number[123] = mt_rand(0, 1000);
		$this->number[124] = mt_rand(0, 1000);
		$this->number[125] = mt_rand(0, 1000);
		$this->number[126] = mt_rand(0, 1000);
		$this->number[127] = mt_rand(0, 1000);
		$this->number[128] = mt_rand(0, 1000);
		$this->number[129] = mt_rand(0, 1000);
		$this->number[130] = mt_rand(0, 1000);
		$this->number[131] = mt_rand(0, 1000);
		$this->number[132] = mt_rand(0, 1000);
		$this->number[133] = mt_rand(0, 1000);
		$this->number[134] = mt_rand(0, 1000);
		$this->number[135] = mt_rand(0, 1000);
		$this->number[136] = mt_rand(0, 1000);
		$this->number[137] = mt_rand(0, 1000);
		$this->number[138] = mt_rand(0, 1000);
		$this->number[139] = mt_rand(0, 1000);
		$this->number[140] = mt_rand(0, 1000);
		$this->number[141] = mt_rand(0, 1000);
		$this->number[142] = mt_rand(0, 1000);
		$this->number[143] = mt_rand(0, 1000);
		$this->number[144] = mt_rand(0, 1000);
		$this->number[145] = mt_rand(0, 1000);
		$this->number[146] = mt_rand(0, 1000);
		$this->number[147] = mt_rand(0, 1000);
		$this->number[148] = mt_rand(0, 1000);
		$this->number[149] = mt_rand(0, 1000);
		$this->number[150] = mt_rand(0, 1000);
		$this->number[151] = mt_rand(0, 1000);
		$this->number[152] = mt_rand(0, 1000);
		$this->number[153] = mt_rand(0, 1000);
		$this->number[154] = mt_rand(0, 1000);
		$this->number[155] = mt_rand(0, 1000);
		$this->number[156] = mt_rand(0, 1000);
		$this->number[157] = mt_rand(0, 1000);
		$this->number[158] = mt_rand(0, 1000);
		$this->number[159] = mt_rand(0, 1000);
		$this->number[160] = mt_rand(0, 1000);
		$this->number[161] = mt_rand(0, 1000);
		$this->number[162] = mt_rand(0, 1000);
		$this->number[163] = mt_rand(0, 1000);
		$this->number[164] = mt_rand(0, 1000);
		$this->number[165] = mt_rand(0, 1000);
		$this->number[166] = mt_rand(0, 1000);
		$this->number[167] = mt_rand(0, 1000);
		$this->number[168] = mt_rand(0, 1000);
		$this->number[169] = mt_rand(0, 1000);
		$this->number[170] = mt_rand(0, 1000);
		$this->number[171] = mt_rand(0, 1000);
		$this->number[172] = mt_rand(0, 1000);
		$this->number[173] = mt_rand(0, 1000);
		$this->number[174] = mt_rand(0, 1000);
		$this->number[175] = mt_rand(0, 1000);
		$this->number[176] = mt_rand(0, 1000);
		$this->number[177] = mt_rand(0, 1000);
		$this->number[178] = mt_rand(0, 1000);
		$this->number[179] = mt_rand(0, 1000);
		$this->number[180] = mt_rand(0, 1000);
		$this->number[181] = mt_rand(0, 1000);
		$this->number[182] = mt_rand(0, 1000);
		$this->number[183] = mt_rand(0, 1000);
		$this->number[184] = mt_rand(0, 1000);
		$this->number[185] = mt_rand(0, 1000);
		$this->number[186] = mt_rand(0, 1000);
		$this->number[187] = mt_rand(0, 1000);
		$this->number[188] = mt_rand(0, 1000);
		$this->number[189] = mt_rand(0, 1000);
		$this->number[190] = mt_rand(0, 1000);
		$this->number[191] = mt_rand(0, 1000);
		$this->number[192] = mt_rand(0, 1000);
		$this->number[193] = mt_rand(0, 1000);
		$this->number[194] = mt_rand(0, 1000);
		$this->number[195] = mt_rand(0, 1000);
		$this->number[196] = mt_rand(0, 1000);
		$this->number[197] = mt_rand(0, 1000);
		$this->number[198] = mt_rand(0, 1000);
		$this->number[199] = mt_rand(0, 1000);
		$this->number[200] = mt_rand(0, 1000);
		$this->number[201] = mt_rand(0, 1000);
		$this->number[202] = mt_rand(0, 1000);
		$this->number[203] = mt_rand(0, 1000);
		$this->number[204] = mt_rand(0, 1000);
		$this->number[205] = mt_rand(0, 1000);
		$this->number[206] = mt_rand(0, 1000);
		$this->number[207] = mt_rand(0, 1000);
		$this->number[208] = mt_rand(0, 1000);
		$this->number[209] = mt_rand(0, 1000);
		$this->number[210] = mt_rand(0, 1000);
		$this->number[211] = mt_rand(0, 1000);
		$this->number[212] = mt_rand(0, 1000);
		$this->number[213] = mt_rand(0, 1000);
		$this->number[214] = mt_rand(0, 1000);
		$this->number[215] = mt_rand(0, 1000);
		$this->number[216] = mt_rand(0, 1000);
		$this->number[217] = mt_rand(0, 1000);
		$this->number[218] = mt_rand(0, 1000);
		$this->number[219] = mt_rand(0, 1000);
		$this->number[220] = mt_rand(0, 1000);
		$this->number[221] = mt_rand(0, 1000);
		$this->number[222] = mt_rand(0, 1000);
		$this->number[223] = mt_rand(0, 1000);
		$this->number[224] = mt_rand(0, 1000);
		$this->number[225] = mt_rand(0, 1000);
		$this->number[226] = mt_rand(0, 1000);
		$this->number[227] = mt_rand(0, 1000);
		$this->number[228] = mt_rand(0, 1000);
		$this->number[229] = mt_rand(0, 1000);
		$this->number[230] = mt_rand(0, 1000);
		$this->number[231] = mt_rand(0, 1000);
		$this->number[232] = mt_rand(0, 1000);
		$this->number[233] = mt_rand(0, 1000);
		$this->number[234] = mt_rand(0, 1000);
		$this->number[235] = mt_rand(0, 1000);
		$this->number[236] = mt_rand(0, 1000);
		$this->number[237] = mt_rand(0, 1000);
		$this->number[238] = mt_rand(0, 1000);
		$this->number[239] = mt_rand(0, 1000);
		$this->number[240] = mt_rand(0, 1000);
		$this->number[241] = mt_rand(0, 1000);
		$this->number[242] = mt_rand(0, 1000);
		$this->number[243] = mt_rand(0, 1000);
		$this->number[244] = mt_rand(0, 1000);
		$this->number[245] = mt_rand(0, 1000);
		$this->number[246] = mt_rand(0, 1000);
		$this->number[247] = mt_rand(0, 1000);
		$this->number[248] = mt_rand(0, 1000);
		$this->number[249] = mt_rand(0, 1000);
		$this->number[250] = mt_rand(0, 1000);
		$this->number[251] = mt_rand(0, 1000);
		$this->number[252] = mt_rand(0, 1000);
		$this->number[253] = mt_rand(0, 1000);
		$this->number[254] = mt_rand(0, 1000);
		$this->number[255] = mt_rand(0, 1000);
		$this->number[256] = mt_rand(0, 1000);
		$this->number[257] = mt_rand(0, 1000);
		$this->number[258] = mt_rand(0, 1000);
		$this->number[259] = mt_rand(0, 1000);
		$this->number[260] = mt_rand(0, 1000);
		$this->number[261] = mt_rand(0, 1000);
		$this->number[262] = mt_rand(0, 1000);
		$this->number[263] = mt_rand(0, 1000);
		$this->number[264] = mt_rand(0, 1000);
		$this->number[265] = mt_rand(0, 1000);
		$this->number[266] = mt_rand(0, 1000);
		$this->number[267] = mt_rand(0, 1000);
		$this->number[268] = mt_rand(0, 1000);
		$this->number[269] = mt_rand(0, 1000);
		$this->number[270] = mt_rand(0, 1000);
		$this->number[271] = mt_rand(0, 1000);
		$this->number[272] = mt_rand(0, 1000);
		$this->number[273] = mt_rand(0, 1000);
		$this->number[274] = mt_rand(0, 1000);
		$this->number[275] = mt_rand(0, 1000);
		$this->number[276] = mt_rand(0, 1000);
		$this->number[277] = mt_rand(0, 1000);
		$this->number[278] = mt_rand(0, 1000);
		$this->number[279] = mt_rand(0, 1000);
		$this->number[280] = mt_rand(0, 1000);
		$this->number[281] = mt_rand(0, 1000);
		$this->number[282] = mt_rand(0, 1000);
		$this->number[283] = mt_rand(0, 1000);
		$this->number[284] = mt_rand(0, 1000);
		$this->number[285] = mt_rand(0, 1000);
		$this->number[286] = mt_rand(0, 1000);
		$this->number[287] = mt_rand(0, 1000);
		$this->number[288] = mt_rand(0, 1000);
		$this->number[289] = mt_rand(0, 1000);
		$this->number[290] = mt_rand(0, 1000);
		$this->number[291] = mt_rand(0, 1000);
		$this->number[292] = mt_rand(0, 1000);
		$this->number[293] = mt_rand(0, 1000);
		$this->number[294] = mt_rand(0, 1000);
		$this->number[295] = mt_rand(0, 1000);
		$this->number[296] = mt_rand(0, 1000);
		$this->number[297] = mt_rand(0, 1000);
		$this->number[298] = mt_rand(0, 1000);
		$this->number[299] = mt_rand(0, 1000);
		$this->number[300] = mt_rand(0, 1000);
		$this->number[301] = mt_rand(0, 1000);
		$this->number[302] = mt_rand(0, 1000);
		$this->number[303] = mt_rand(0, 1000);
		$this->number[304] = mt_rand(0, 1000);
		$this->number[305] = mt_rand(0, 1000);
		$this->number[306] = mt_rand(0, 1000);
		$this->number[307] = mt_rand(0, 1000);
		$this->number[308] = mt_rand(0, 1000);
		$this->number[309] = mt_rand(0, 1000);
		$this->number[310] = mt_rand(0, 1000);
		$this->number[311] = mt_rand(0, 1000);
		$this->number[312] = mt_rand(0, 1000);
		$this->number[313] = mt_rand(0, 1000);
		$this->number[314] = mt_rand(0, 1000);
		$this->number[315] = mt_rand(0, 1000);
		$this->number[316] = mt_rand(0, 1000);
		$this->number[317] = mt_rand(0, 1000);
		$this->number[318] = mt_rand(0, 1000);
		$this->number[319] = mt_rand(0, 1000);
		$this->number[320] = mt_rand(0, 1000);
		$this->number[321] = mt_rand(0, 1000);
		$this->number[322] = mt_rand(0, 1000);
		$this->number[323] = mt_rand(0, 1000);
		$this->number[324] = mt_rand(0, 1000);
		$this->number[325] = mt_rand(0, 1000);
		$this->number[326] = mt_rand(0, 1000);
		$this->number[327] = mt_rand(0, 1000);
		$this->number[328] = mt_rand(0, 1000);
		$this->number[329] = mt_rand(0, 1000);
		$this->number[330] = mt_rand(0, 1000);
		$this->number[331] = mt_rand(0, 1000);
		$this->number[332] = mt_rand(0, 1000);
		$this->number[333] = mt_rand(0, 1000);
		$this->number[334] = mt_rand(0, 1000);
		$this->number[335] = mt_rand(0, 1000);
		$this->number[336] = mt_rand(0, 1000);
		$this->number[337] = mt_rand(0, 1000);
		$this->number[338] = mt_rand(0, 1000);
		$this->number[339] = mt_rand(0, 1000);
		$this->number[340] = mt_rand(0, 1000);
		$this->number[341] = mt_rand(0, 1000);
		$this->number[342] = mt_rand(0, 1000);
		$this->number[343] = mt_rand(0, 1000);
		$this->number[344] = mt_rand(0, 1000);
		$this->number[345] = mt_rand(0, 1000);
		$this->number[346] = mt_rand(0, 1000);
		$this->number[347] = mt_rand(0, 1000);
		$this->number[348] = mt_rand(0, 1000);
		$this->number[349] = mt_rand(0, 1000);
		$this->number[350] = mt_rand(0, 1000);
		$this->number[351] = mt_rand(0, 1000);
		$this->number[352] = mt_rand(0, 1000);
		$this->number[353] = mt_rand(0, 1000);
		$this->number[354] = mt_rand(0, 1000);
		$this->number[355] = mt_rand(0, 1000);
		$this->number[356] = mt_rand(0, 1000);
		$this->number[357] = mt_rand(0, 1000);
		$this->number[358] = mt_rand(0, 1000);
		$this->number[359] = mt_rand(0, 1000);
		$this->number[360] = mt_rand(0, 1000);
		$this->number[361] = mt_rand(0, 1000);
		$this->number[362] = mt_rand(0, 1000);
		$this->number[363] = mt_rand(0, 1000);
		$this->number[364] = mt_rand(0, 1000);
		$this->number[365] = mt_rand(0, 1000);
		$this->number[366] = mt_rand(0, 1000);
		$this->number[367] = mt_rand(0, 1000);
		$this->number[368] = mt_rand(0, 1000);
		$this->number[369] = mt_rand(0, 1000);
		$this->number[370] = mt_rand(0, 1000);
		$this->number[371] = mt_rand(0, 1000);
		$this->number[372] = mt_rand(0, 1000);
		$this->number[373] = mt_rand(0, 1000);
		$this->number[374] = mt_rand(0, 1000);
		$this->number[375] = mt_rand(0, 1000);
		$this->number[376] = mt_rand(0, 1000);
		$this->number[377] = mt_rand(0, 1000);
		$this->number[378] = mt_rand(0, 1000);
		$this->number[379] = mt_rand(0, 1000);
		$this->number[380] = mt_rand(0, 1000);
		$this->number[381] = mt_rand(0, 1000);
		$this->number[382] = mt_rand(0, 1000);
		$this->number[383] = mt_rand(0, 1000);
		$this->number[384] = mt_rand(0, 1000);
		$this->number[385] = mt_rand(0, 1000);
		$this->number[386] = mt_rand(0, 1000);
		$this->number[387] = mt_rand(0, 1000);
		$this->number[388] = mt_rand(0, 1000);
		$this->number[389] = mt_rand(0, 1000);
		$this->number[390] = mt_rand(0, 1000);
		$this->number[391] = mt_rand(0, 1000);
		$this->number[392] = mt_rand(0, 1000);
		$this->number[393] = mt_rand(0, 1000);
		$this->number[394] = mt_rand(0, 1000);
		$this->number[395] = mt_rand(0, 1000);
		$this->number[396] = mt_rand(0, 1000);
		$this->number[397] = mt_rand(0, 1000);
		$this->number[398] = mt_rand(0, 1000);
		$this->number[399] = mt_rand(0, 1000);
		$this->number[400] = mt_rand(0, 1000);
		$this->number[401] = mt_rand(0, 1000);
		$this->number[402] = mt_rand(0, 1000);
		$this->number[403] = mt_rand(0, 1000);
		$this->number[404] = mt_rand(0, 1000);
		$this->number[405] = mt_rand(0, 1000);
		$this->number[406] = mt_rand(0, 1000);
		$this->number[407] = mt_rand(0, 1000);
		$this->number[408] = mt_rand(0, 1000);
		$this->number[409] = mt_rand(0, 1000);
		$this->number[410] = mt_rand(0, 1000);
		$this->number[411] = mt_rand(0, 1000);
		$this->number[412] = mt_rand(0, 1000);
		$this->number[413] = mt_rand(0, 1000);
		$this->number[414] = mt_rand(0, 1000);
		$this->number[415] = mt_rand(0, 1000);
		$this->number[416] = mt_rand(0, 1000);
		$this->number[417] = mt_rand(0, 1000);
		$this->number[418] = mt_rand(0, 1000);
		$this->number[419] = mt_rand(0, 1000);
		$this->number[420] = mt_rand(0, 1000);
		$this->number[421] = mt_rand(0, 1000);
		$this->number[422] = mt_rand(0, 1000);
		$this->number[423] = mt_rand(0, 1000);
		$this->number[424] = mt_rand(0, 1000);
		$this->number[425] = mt_rand(0, 1000);
		$this->number[426] = mt_rand(0, 1000);
		$this->number[427] = mt_rand(0, 1000);
		$this->number[428] = mt_rand(0, 1000);
		$this->number[429] = mt_rand(0, 1000);
		$this->number[430] = mt_rand(0, 1000);
		$this->number[431] = mt_rand(0, 1000);
		$this->number[432] = mt_rand(0, 1000);
		$this->number[433] = mt_rand(0, 1000);
		$this->number[434] = mt_rand(0, 1000);
		$this->number[435] = mt_rand(0, 1000);
		$this->number[436] = mt_rand(0, 1000);
		$this->number[437] = mt_rand(0, 1000);
		$this->number[438] = mt_rand(0, 1000);
		$this->number[439] = mt_rand(0, 1000);
		$this->number[440] = mt_rand(0, 1000);
		$this->number[441] = mt_rand(0, 1000);
		$this->number[442] = mt_rand(0, 1000);
		$this->number[443] = mt_rand(0, 1000);
		$this->number[444] = mt_rand(0, 1000);
		$this->number[445] = mt_rand(0, 1000);
		$this->number[446] = mt_rand(0, 1000);
		$this->number[447] = mt_rand(0, 1000);
		$this->number[448] = mt_rand(0, 1000);
		$this->number[449] = mt_rand(0, 1000);
		$this->number[450] = mt_rand(0, 1000);
		$this->number[451] = mt_rand(0, 1000);
		$this->number[452] = mt_rand(0, 1000);
		$this->number[453] = mt_rand(0, 1000);
		$this->number[454] = mt_rand(0, 1000);
		$this->number[455] = mt_rand(0, 1000);
		$this->number[456] = mt_rand(0, 1000);
		$this->number[457] = mt_rand(0, 1000);
		$this->number[458] = mt_rand(0, 1000);
		$this->number[459] = mt_rand(0, 1000);
		$this->number[460] = mt_rand(0, 1000);
		$this->number[461] = mt_rand(0, 1000);
		$this->number[462] = mt_rand(0, 1000);
		$this->number[463] = mt_rand(0, 1000);
		$this->number[464] = mt_rand(0, 1000);
		$this->number[465] = mt_rand(0, 1000);
		$this->number[466] = mt_rand(0, 1000);
		$this->number[467] = mt_rand(0, 1000);
		$this->number[468] = mt_rand(0, 1000);
		$this->number[469] = mt_rand(0, 1000);
		$this->number[470] = mt_rand(0, 1000);
		$this->number[471] = mt_rand(0, 1000);
		$this->number[472] = mt_rand(0, 1000);
		$this->number[473] = mt_rand(0, 1000);
		$this->number[474] = mt_rand(0, 1000);
		$this->number[475] = mt_rand(0, 1000);
		$this->number[476] = mt_rand(0, 1000);
		$this->number[477] = mt_rand(0, 1000);
		$this->number[478] = mt_rand(0, 1000);
		$this->number[479] = mt_rand(0, 1000);
		$this->number[480] = mt_rand(0, 1000);
		$this->number[481] = mt_rand(0, 1000);
		$this->number[482] = mt_rand(0, 1000);
		$this->number[483] = mt_rand(0, 1000);
		$this->number[484] = mt_rand(0, 1000);
		$this->number[485] = mt_rand(0, 1000);
		$this->number[486] = mt_rand(0, 1000);
		$this->number[487] = mt_rand(0, 1000);
		$this->number[488] = mt_rand(0, 1000);
		$this->number[489] = mt_rand(0, 1000);
		$this->number[490] = mt_rand(0, 1000);
		$this->number[491] = mt_rand(0, 1000);
		$this->number[492] = mt_rand(0, 1000);
		$this->number[493] = mt_rand(0, 1000);
		$this->number[494] = mt_rand(0, 1000);
		$this->number[495] = mt_rand(0, 1000);
		$this->number[496] = mt_rand(0, 1000);
		$this->number[497] = mt_rand(0, 1000);
		$this->number[498] = mt_rand(0, 1000);
		$this->number[499] = mt_rand(0, 1000);
		$this->number[500] = mt_rand(0, 1000);
		$this->number[501] = mt_rand(0, 1000);
		$this->number[502] = mt_rand(0, 1000);
		$this->number[503] = mt_rand(0, 1000);
		$this->number[504] = mt_rand(0, 1000);
		$this->number[505] = mt_rand(0, 1000);
		$this->number[506] = mt_rand(0, 1000);
		$this->number[507] = mt_rand(0, 1000);
		$this->number[508] = mt_rand(0, 1000);
		$this->number[509] = mt_rand(0, 1000);
		$this->number[510] = mt_rand(0, 1000);
		$this->number[511] = mt_rand(0, 1000);
		$this->number[512] = mt_rand(0, 1000);
		$this->number[513] = mt_rand(0, 1000);
		$this->number[514] = mt_rand(0, 1000);
		$this->number[515] = mt_rand(0, 1000);
		$this->number[516] = mt_rand(0, 1000);
		$this->number[517] = mt_rand(0, 1000);
		$this->number[518] = mt_rand(0, 1000);
		$this->number[519] = mt_rand(0, 1000);
		$this->number[520] = mt_rand(0, 1000);
		$this->number[521] = mt_rand(0, 1000);
		$this->number[522] = mt_rand(0, 1000);
		$this->number[523] = mt_rand(0, 1000);
		$this->number[524] = mt_rand(0, 1000);
		$this->number[525] = mt_rand(0, 1000);
		$this->number[526] = mt_rand(0, 1000);
		$this->number[527] = mt_rand(0, 1000);
		$this->number[528] = mt_rand(0, 1000);
		$this->number[529] = mt_rand(0, 1000);
		$this->number[530] = mt_rand(0, 1000);
		$this->number[531] = mt_rand(0, 1000);
		$this->number[532] = mt_rand(0, 1000);
		$this->number[533] = mt_rand(0, 1000);
		$this->number[534] = mt_rand(0, 1000);
		$this->number[535] = mt_rand(0, 1000);
		$this->number[536] = mt_rand(0, 1000);
		$this->number[537] = mt_rand(0, 1000);
		$this->number[538] = mt_rand(0, 1000);
		$this->number[539] = mt_rand(0, 1000);
		$this->number[540] = mt_rand(0, 1000);
		$this->number[541] = mt_rand(0, 1000);
		$this->number[542] = mt_rand(0, 1000);
		$this->number[543] = mt_rand(0, 1000);
		$this->number[544] = mt_rand(0, 1000);
		$this->number[545] = mt_rand(0, 1000);
		$this->number[546] = mt_rand(0, 1000);
		$this->number[547] = mt_rand(0, 1000);
		$this->number[548] = mt_rand(0, 1000);
		$this->number[549] = mt_rand(0, 1000);
		$this->number[550] = mt_rand(0, 1000);
		$this->number[551] = mt_rand(0, 1000);
		$this->number[552] = mt_rand(0, 1000);
		$this->number[553] = mt_rand(0, 1000);
		$this->number[554] = mt_rand(0, 1000);
		$this->number[555] = mt_rand(0, 1000);
		$this->number[556] = mt_rand(0, 1000);
		$this->number[557] = mt_rand(0, 1000);
		$this->number[558] = mt_rand(0, 1000);
		$this->number[559] = mt_rand(0, 1000);
		$this->number[560] = mt_rand(0, 1000);
		$this->number[561] = mt_rand(0, 1000);
		$this->number[562] = mt_rand(0, 1000);
		$this->number[563] = mt_rand(0, 1000);
		$this->number[564] = mt_rand(0, 1000);
		$this->number[565] = mt_rand(0, 1000);
		$this->number[566] = mt_rand(0, 1000);
		$this->number[567] = mt_rand(0, 1000);
		$this->number[568] = mt_rand(0, 1000);
		$this->number[569] = mt_rand(0, 1000);
		$this->number[570] = mt_rand(0, 1000);
		$this->number[571] = mt_rand(0, 1000);
		$this->number[572] = mt_rand(0, 1000);
		$this->number[573] = mt_rand(0, 1000);
		$this->number[574] = mt_rand(0, 1000);
		$this->number[575] = mt_rand(0, 1000);
		$this->number[576] = mt_rand(0, 1000);
		$this->number[577] = mt_rand(0, 1000);
		$this->number[578] = mt_rand(0, 1000);
		$this->number[579] = mt_rand(0, 1000);
		$this->number[580] = mt_rand(0, 1000);
		$this->number[581] = mt_rand(0, 1000);
		$this->number[582] = mt_rand(0, 1000);
		$this->number[583] = mt_rand(0, 1000);
		$this->number[584] = mt_rand(0, 1000);
		$this->number[585] = mt_rand(0, 1000);
		$this->number[586] = mt_rand(0, 1000);
		$this->number[587] = mt_rand(0, 1000);
		$this->number[588] = mt_rand(0, 1000);
		$this->number[589] = mt_rand(0, 1000);
		$this->number[590] = mt_rand(0, 1000);
		$this->number[591] = mt_rand(0, 1000);
		$this->number[592] = mt_rand(0, 1000);
		$this->number[593] = mt_rand(0, 1000);
		$this->number[594] = mt_rand(0, 1000);
		$this->number[595] = mt_rand(0, 1000);
		$this->number[596] = mt_rand(0, 1000);
		$this->number[597] = mt_rand(0, 1000);
		$this->number[598] = mt_rand(0, 1000);
		$this->number[599] = mt_rand(0, 1000);
		$this->number[600] = mt_rand(0, 1000);
		$this->number[601] = mt_rand(0, 1000);
		$this->number[602] = mt_rand(0, 1000);
		$this->number[603] = mt_rand(0, 1000);
		$this->number[604] = mt_rand(0, 1000);
		$this->number[605] = mt_rand(0, 1000);
		$this->number[606] = mt_rand(0, 1000);
		$this->number[607] = mt_rand(0, 1000);
		$this->number[608] = mt_rand(0, 1000);
		$this->number[609] = mt_rand(0, 1000);
		$this->number[610] = mt_rand(0, 1000);
		$this->number[611] = mt_rand(0, 1000);
		$this->number[612] = mt_rand(0, 1000);
		$this->number[613] = mt_rand(0, 1000);
		$this->number[614] = mt_rand(0, 1000);
		$this->number[615] = mt_rand(0, 1000);
		$this->number[616] = mt_rand(0, 1000);
		$this->number[617] = mt_rand(0, 1000);
		$this->number[618] = mt_rand(0, 1000);
		$this->number[619] = mt_rand(0, 1000);
		$this->number[620] = mt_rand(0, 1000);
		$this->number[621] = mt_rand(0, 1000);
		$this->number[622] = mt_rand(0, 1000);
		$this->number[623] = mt_rand(0, 1000);
		$this->number[624] = mt_rand(0, 1000);
		$this->number[625] = mt_rand(0, 1000);
		$this->number[626] = mt_rand(0, 1000);
		$this->number[627] = mt_rand(0, 1000);
		$this->number[628] = mt_rand(0, 1000);
		$this->number[629] = mt_rand(0, 1000);
		$this->number[630] = mt_rand(0, 1000);
		$this->number[631] = mt_rand(0, 1000);
		$this->number[632] = mt_rand(0, 1000);
		$this->number[633] = mt_rand(0, 1000);
		$this->number[634] = mt_rand(0, 1000);
		$this->number[635] = mt_rand(0, 1000);
		$this->number[636] = mt_rand(0, 1000);
		$this->number[637] = mt_rand(0, 1000);
		$this->number[638] = mt_rand(0, 1000);
		$this->number[639] = mt_rand(0, 1000);
		$this->number[640] = mt_rand(0, 1000);
		$this->number[641] = mt_rand(0, 1000);
		$this->number[642] = mt_rand(0, 1000);
		$this->number[643] = mt_rand(0, 1000);
		$this->number[644] = mt_rand(0, 1000);
		$this->number[645] = mt_rand(0, 1000);
		$this->number[646] = mt_rand(0, 1000);
		$this->number[647] = mt_rand(0, 1000);
		$this->number[648] = mt_rand(0, 1000);
		$this->number[649] = mt_rand(0, 1000);
		$this->number[650] = mt_rand(0, 1000);
		$this->number[651] = mt_rand(0, 1000);
		$this->number[652] = mt_rand(0, 1000);
		$this->number[653] = mt_rand(0, 1000);
		$this->number[654] = mt_rand(0, 1000);
		$this->number[655] = mt_rand(0, 1000);
		$this->number[656] = mt_rand(0, 1000);
		$this->number[657] = mt_rand(0, 1000);
		$this->number[658] = mt_rand(0, 1000);
		$this->number[659] = mt_rand(0, 1000);
		$this->number[660] = mt_rand(0, 1000);
		$this->number[661] = mt_rand(0, 1000);
		$this->number[662] = mt_rand(0, 1000);
		$this->number[663] = mt_rand(0, 1000);
		$this->number[664] = mt_rand(0, 1000);
		$this->number[665] = mt_rand(0, 1000);
		$this->number[666] = mt_rand(0, 1000);
		$this->number[667] = mt_rand(0, 1000);
		$this->number[668] = mt_rand(0, 1000);
		$this->number[669] = mt_rand(0, 1000);
		$this->number[670] = mt_rand(0, 1000);
		$this->number[671] = mt_rand(0, 1000);
		$this->number[672] = mt_rand(0, 1000);
		$this->number[673] = mt_rand(0, 1000);
		$this->number[674] = mt_rand(0, 1000);
		$this->number[675] = mt_rand(0, 1000);
		$this->number[676] = mt_rand(0, 1000);
		$this->number[677] = mt_rand(0, 1000);
		$this->number[678] = mt_rand(0, 1000);
		$this->number[679] = mt_rand(0, 1000);
		$this->number[680] = mt_rand(0, 1000);
		$this->number[681] = mt_rand(0, 1000);
		$this->number[682] = mt_rand(0, 1000);
		$this->number[683] = mt_rand(0, 1000);
		$this->number[684] = mt_rand(0, 1000);
		$this->number[685] = mt_rand(0, 1000);
		$this->number[686] = mt_rand(0, 1000);
		$this->number[687] = mt_rand(0, 1000);
		$this->number[688] = mt_rand(0, 1000);
		$this->number[689] = mt_rand(0, 1000);
		$this->number[690] = mt_rand(0, 1000);
		$this->number[691] = mt_rand(0, 1000);
		$this->number[692] = mt_rand(0, 1000);
		$this->number[693] = mt_rand(0, 1000);
		$this->number[694] = mt_rand(0, 1000);
		$this->number[695] = mt_rand(0, 1000);
		$this->number[696] = mt_rand(0, 1000);
		$this->number[697] = mt_rand(0, 1000);
		$this->number[698] = mt_rand(0, 1000);
		$this->number[699] = mt_rand(0, 1000);
		$this->number[700] = mt_rand(0, 1000);
		$this->number[701] = mt_rand(0, 1000);
		$this->number[702] = mt_rand(0, 1000);
		$this->number[703] = mt_rand(0, 1000);
		$this->number[704] = mt_rand(0, 1000);
		$this->number[705] = mt_rand(0, 1000);
		$this->number[706] = mt_rand(0, 1000);
		$this->number[707] = mt_rand(0, 1000);
		$this->number[708] = mt_rand(0, 1000);
		$this->number[709] = mt_rand(0, 1000);
		$this->number[710] = mt_rand(0, 1000);
		$this->number[711] = mt_rand(0, 1000);
		$this->number[712] = mt_rand(0, 1000);
		$this->number[713] = mt_rand(0, 1000);
		$this->number[714] = mt_rand(0, 1000);
		$this->number[715] = mt_rand(0, 1000);
		$this->number[716] = mt_rand(0, 1000);
		$this->number[717] = mt_rand(0, 1000);
		$this->number[718] = mt_rand(0, 1000);
		$this->number[719] = mt_rand(0, 1000);
		$this->number[720] = mt_rand(0, 1000);
		$this->number[721] = mt_rand(0, 1000);
		$this->number[722] = mt_rand(0, 1000);
		$this->number[723] = mt_rand(0, 1000);
		$this->number[724] = mt_rand(0, 1000);
		$this->number[725] = mt_rand(0, 1000);
		$this->number[726] = mt_rand(0, 1000);
		$this->number[727] = mt_rand(0, 1000);
		$this->number[728] = mt_rand(0, 1000);
		$this->number[729] = mt_rand(0, 1000);
		$this->number[730] = mt_rand(0, 1000);
		$this->number[731] = mt_rand(0, 1000);
		$this->number[732] = mt_rand(0, 1000);
		$this->number[733] = mt_rand(0, 1000);
		$this->number[734] = mt_rand(0, 1000);
		$this->number[735] = mt_rand(0, 1000);
		$this->number[736] = mt_rand(0, 1000);
		$this->number[737] = mt_rand(0, 1000);
		$this->number[738] = mt_rand(0, 1000);
		$this->number[739] = mt_rand(0, 1000);
		$this->number[740] = mt_rand(0, 1000);
		$this->number[741] = mt_rand(0, 1000);
		$this->number[742] = mt_rand(0, 1000);
		$this->number[743] = mt_rand(0, 1000);
		$this->number[744] = mt_rand(0, 1000);
		$this->number[745] = mt_rand(0, 1000);
		$this->number[746] = mt_rand(0, 1000);
		$this->number[747] = mt_rand(0, 1000);
		$this->number[748] = mt_rand(0, 1000);
		$this->number[749] = mt_rand(0, 1000);
		$this->number[750] = mt_rand(0, 1000);
		$this->number[751] = mt_rand(0, 1000);
		$this->number[752] = mt_rand(0, 1000);
		$this->number[753] = mt_rand(0, 1000);
		$this->number[754] = mt_rand(0, 1000);
		$this->number[755] = mt_rand(0, 1000);
		$this->number[756] = mt_rand(0, 1000);
		$this->number[757] = mt_rand(0, 1000);
		$this->number[758] = mt_rand(0, 1000);
		$this->number[759] = mt_rand(0, 1000);
		$this->number[760] = mt_rand(0, 1000);
		$this->number[761] = mt_rand(0, 1000);
		$this->number[762] = mt_rand(0, 1000);
		$this->number[763] = mt_rand(0, 1000);
		$this->number[764] = mt_rand(0, 1000);
		$this->number[765] = mt_rand(0, 1000);
		$this->number[766] = mt_rand(0, 1000);
		$this->number[767] = mt_rand(0, 1000);
		$this->number[768] = mt_rand(0, 1000);
		$this->number[769] = mt_rand(0, 1000);
		$this->number[770] = mt_rand(0, 1000);
		$this->number[771] = mt_rand(0, 1000);
		$this->number[772] = mt_rand(0, 1000);
		$this->number[773] = mt_rand(0, 1000);
		$this->number[774] = mt_rand(0, 1000);
		$this->number[775] = mt_rand(0, 1000);
		$this->number[776] = mt_rand(0, 1000);
		$this->number[777] = mt_rand(0, 1000);
		$this->number[778] = mt_rand(0, 1000);
		$this->number[779] = mt_rand(0, 1000);
		$this->number[780] = mt_rand(0, 1000);
		$this->number[781] = mt_rand(0, 1000);
		$this->number[782] = mt_rand(0, 1000);
		$this->number[783] = mt_rand(0, 1000);
		$this->number[784] = mt_rand(0, 1000);
		$this->number[785] = mt_rand(0, 1000);
		$this->number[786] = mt_rand(0, 1000);
		$this->number[787] = mt_rand(0, 1000);
		$this->number[788] = mt_rand(0, 1000);
		$this->number[789] = mt_rand(0, 1000);
		$this->number[790] = mt_rand(0, 1000);
		$this->number[791] = mt_rand(0, 1000);
		$this->number[792] = mt_rand(0, 1000);
		$this->number[793] = mt_rand(0, 1000);
		$this->number[794] = mt_rand(0, 1000);
		$this->number[795] = mt_rand(0, 1000);
		$this->number[796] = mt_rand(0, 1000);
		$this->number[797] = mt_rand(0, 1000);
		$this->number[798] = mt_rand(0, 1000);
		$this->number[799] = mt_rand(0, 1000);
		$this->number[800] = mt_rand(0, 1000);
		$this->number[801] = mt_rand(0, 1000);
		$this->number[802] = mt_rand(0, 1000);
		$this->number[803] = mt_rand(0, 1000);
		$this->number[804] = mt_rand(0, 1000);
		$this->number[805] = mt_rand(0, 1000);
		$this->number[806] = mt_rand(0, 1000);
		$this->number[807] = mt_rand(0, 1000);
		$this->number[808] = mt_rand(0, 1000);
		$this->number[809] = mt_rand(0, 1000);
		$this->number[810] = mt_rand(0, 1000);
		$this->number[811] = mt_rand(0, 1000);
		$this->number[812] = mt_rand(0, 1000);
		$this->number[813] = mt_rand(0, 1000);
		$this->number[814] = mt_rand(0, 1000);
		$this->number[815] = mt_rand(0, 1000);
		$this->number[816] = mt_rand(0, 1000);
		$this->number[817] = mt_rand(0, 1000);
		$this->number[818] = mt_rand(0, 1000);
		$this->number[819] = mt_rand(0, 1000);
		$this->number[820] = mt_rand(0, 1000);
		$this->number[821] = mt_rand(0, 1000);
		$this->number[822] = mt_rand(0, 1000);
		$this->number[823] = mt_rand(0, 1000);
		$this->number[824] = mt_rand(0, 1000);
		$this->number[825] = mt_rand(0, 1000);
		$this->number[826] = mt_rand(0, 1000);
		$this->number[827] = mt_rand(0, 1000);
		$this->number[828] = mt_rand(0, 1000);
		$this->number[829] = mt_rand(0, 1000);
		$this->number[830] = mt_rand(0, 1000);
		$this->number[831] = mt_rand(0, 1000);
		$this->number[832] = mt_rand(0, 1000);
		$this->number[833] = mt_rand(0, 1000);
		$this->number[834] = mt_rand(0, 1000);
		$this->number[835] = mt_rand(0, 1000);
		$this->number[836] = mt_rand(0, 1000);
		$this->number[837] = mt_rand(0, 1000);
		$this->number[838] = mt_rand(0, 1000);
		$this->number[839] = mt_rand(0, 1000);
		$this->number[840] = mt_rand(0, 1000);
		$this->number[841] = mt_rand(0, 1000);
		$this->number[842] = mt_rand(0, 1000);
		$this->number[843] = mt_rand(0, 1000);
		$this->number[844] = mt_rand(0, 1000);
		$this->number[845] = mt_rand(0, 1000);
		$this->number[846] = mt_rand(0, 1000);
		$this->number[847] = mt_rand(0, 1000);
		$this->number[848] = mt_rand(0, 1000);
		$this->number[849] = mt_rand(0, 1000);
		$this->number[850] = mt_rand(0, 1000);
		$this->number[851] = mt_rand(0, 1000);
		$this->number[852] = mt_rand(0, 1000);
		$this->number[853] = mt_rand(0, 1000);
		$this->number[854] = mt_rand(0, 1000);
		$this->number[855] = mt_rand(0, 1000);
		$this->number[856] = mt_rand(0, 1000);
		$this->number[857] = mt_rand(0, 1000);
		$this->number[858] = mt_rand(0, 1000);
		$this->number[859] = mt_rand(0, 1000);
		$this->number[860] = mt_rand(0, 1000);
		$this->number[861] = mt_rand(0, 1000);
		$this->number[862] = mt_rand(0, 1000);
		$this->number[863] = mt_rand(0, 1000);
		$this->number[864] = mt_rand(0, 1000);
		$this->number[865] = mt_rand(0, 1000);
		$this->number[866] = mt_rand(0, 1000);
		$this->number[867] = mt_rand(0, 1000);
		$this->number[868] = mt_rand(0, 1000);
		$this->number[869] = mt_rand(0, 1000);
		$this->number[870] = mt_rand(0, 1000);
		$this->number[871] = mt_rand(0, 1000);
		$this->number[872] = mt_rand(0, 1000);
		$this->number[873] = mt_rand(0, 1000);
		$this->number[874] = mt_rand(0, 1000);
		$this->number[875] = mt_rand(0, 1000);
		$this->number[876] = mt_rand(0, 1000);
		$this->number[877] = mt_rand(0, 1000);
		$this->number[878] = mt_rand(0, 1000);
		$this->number[879] = mt_rand(0, 1000);
		$this->number[880] = mt_rand(0, 1000);
		$this->number[881] = mt_rand(0, 1000);
		$this->number[882] = mt_rand(0, 1000);
		$this->number[883] = mt_rand(0, 1000);
		$this->number[884] = mt_rand(0, 1000);
		$this->number[885] = mt_rand(0, 1000);
		$this->number[886] = mt_rand(0, 1000);
		$this->number[887] = mt_rand(0, 1000);
		$this->number[888] = mt_rand(0, 1000);
		$this->number[889] = mt_rand(0, 1000);
		$this->number[890] = mt_rand(0, 1000);
		$this->number[891] = mt_rand(0, 1000);
		$this->number[892] = mt_rand(0, 1000);
		$this->number[893] = mt_rand(0, 1000);
		$this->number[894] = mt_rand(0, 1000);
		$this->number[895] = mt_rand(0, 1000);
		$this->number[896] = mt_rand(0, 1000);
		$this->number[897] = mt_rand(0, 1000);
		$this->number[898] = mt_rand(0, 1000);
		$this->number[899] = mt_rand(0, 1000);
		$this->number[900] = mt_rand(0, 1000);
		$this->number[901] = mt_rand(0, 1000);
		$this->number[902] = mt_rand(0, 1000);
		$this->number[903] = mt_rand(0, 1000);
		$this->number[904] = mt_rand(0, 1000);
		$this->number[905] = mt_rand(0, 1000);
		$this->number[906] = mt_rand(0, 1000);
		$this->number[907] = mt_rand(0, 1000);
		$this->number[908] = mt_rand(0, 1000);
		$this->number[909] = mt_rand(0, 1000);
		$this->number[910] = mt_rand(0, 1000);
		$this->number[911] = mt_rand(0, 1000);
		$this->number[912] = mt_rand(0, 1000);
		$this->number[913] = mt_rand(0, 1000);
		$this->number[914] = mt_rand(0, 1000);
		$this->number[915] = mt_rand(0, 1000);
		$this->number[916] = mt_rand(0, 1000);
		$this->number[917] = mt_rand(0, 1000);
		$this->number[918] = mt_rand(0, 1000);
		$this->number[919] = mt_rand(0, 1000);
		$this->number[920] = mt_rand(0, 1000);
		$this->number[921] = mt_rand(0, 1000);
		$this->number[922] = mt_rand(0, 1000);
		$this->number[923] = mt_rand(0, 1000);
		$this->number[924] = mt_rand(0, 1000);
		$this->number[925] = mt_rand(0, 1000);
		$this->number[926] = mt_rand(0, 1000);
		$this->number[927] = mt_rand(0, 1000);
		$this->number[928] = mt_rand(0, 1000);
		$this->number[929] = mt_rand(0, 1000);
		$this->number[930] = mt_rand(0, 1000);
		$this->number[931] = mt_rand(0, 1000);
		$this->number[932] = mt_rand(0, 1000);
		$this->number[933] = mt_rand(0, 1000);
		$this->number[934] = mt_rand(0, 1000);
		$this->number[935] = mt_rand(0, 1000);
		$this->number[936] = mt_rand(0, 1000);
		$this->number[937] = mt_rand(0, 1000);
		$this->number[938] = mt_rand(0, 1000);
		$this->number[939] = mt_rand(0, 1000);
		$this->number[940] = mt_rand(0, 1000);
		$this->number[941] = mt_rand(0, 1000);
		$this->number[942] = mt_rand(0, 1000);
		$this->number[943] = mt_rand(0, 1000);
		$this->number[944] = mt_rand(0, 1000);
		$this->number[945] = mt_rand(0, 1000);
		$this->number[946] = mt_rand(0, 1000);
		$this->number[947] = mt_rand(0, 1000);
		$this->number[948] = mt_rand(0, 1000);
		$this->number[949] = mt_rand(0, 1000);
		$this->number[950] = mt_rand(0, 1000);
		$this->number[951] = mt_rand(0, 1000);
		$this->number[952] = mt_rand(0, 1000);
		$this->number[953] = mt_rand(0, 1000);
		$this->number[954] = mt_rand(0, 1000);
		$this->number[955] = mt_rand(0, 1000);
		$this->number[956] = mt_rand(0, 1000);
		$this->number[957] = mt_rand(0, 1000);
		$this->number[958] = mt_rand(0, 1000);
		$this->number[959] = mt_rand(0, 1000);
		$this->number[960] = mt_rand(0, 1000);
		$this->number[961] = mt_rand(0, 1000);
		$this->number[962] = mt_rand(0, 1000);
		$this->number[963] = mt_rand(0, 1000);
		$this->number[964] = mt_rand(0, 1000);
		$this->number[965] = mt_rand(0, 1000);
		$this->number[966] = mt_rand(0, 1000);
		$this->number[967] = mt_rand(0, 1000);
		$this->number[968] = mt_rand(0, 1000);
		$this->number[969] = mt_rand(0, 1000);
		$this->number[970] = mt_rand(0, 1000);
		$this->number[971] = mt_rand(0, 1000);
		$this->number[972] = mt_rand(0, 1000);
		$this->number[973] = mt_rand(0, 1000);
		$this->number[974] = mt_rand(0, 1000);
		$this->number[975] = mt_rand(0, 1000);
		$this->number[976] = mt_rand(0, 1000);
		$this->number[977] = mt_rand(0, 1000);
		$this->number[978] = mt_rand(0, 1000);
		$this->number[979] = mt_rand(0, 1000);
		$this->number[980] = mt_rand(0, 1000);
		$this->number[981] = mt_rand(0, 1000);
		$this->number[982] = mt_rand(0, 1000);
		$this->number[983] = mt_rand(0, 1000);
		$this->number[984] = mt_rand(0, 1000);
		$this->number[985] = mt_rand(0, 1000);
		$this->number[986] = mt_rand(0, 1000);
		$this->number[987] = mt_rand(0, 1000);
		$this->number[988] = mt_rand(0, 1000);
		$this->number[989] = mt_rand(0, 1000);
		$this->number[990] = mt_rand(0, 1000);
		$this->number[991] = mt_rand(0, 1000);
		$this->number[992] = mt_rand(0, 1000);
		$this->number[993] = mt_rand(0, 1000);
		$this->number[994] = mt_rand(0, 1000);
		$this->number[995] = mt_rand(0, 1000);
		$this->number[996] = mt_rand(0, 1000);
		$this->number[997] = mt_rand(0, 1000);
		$this->number[998] = mt_rand(0, 1000);
		$this->number[999] = mt_rand(0, 1000);
		$this->number[1000] = mt_rand(0, 1000);

		$this->registerEvent();
	}

	/**
	 * @return Server
	 * @description Copy-pasta of getServer() but ... hehe boiii
	 */
	public function gotServer() : Server{
		return Server::getInstance();
	}

	public function registerEvent() : void{
		$plugin = $this->getServer()->getPluginManager()->getPlugin("YandereDevStyle");
		if($plugin instanceof Main){
			$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
			if($plugin instanceof Main){
				$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
				if($plugin instanceof Main){
					if($plugin instanceof Main){
						$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
						if($plugin instanceof Main){
							if($plugin instanceof Main){
								$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
								if($plugin instanceof Main){
									if($plugin instanceof Main){
										$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
										if($plugin instanceof Main){
											if($plugin instanceof Main){
												$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
												if($plugin instanceof Main){
													if($plugin instanceof Main){
														$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
														if($plugin instanceof Main){
															if($plugin instanceof Main){
																$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																if($plugin instanceof Main){
																	if($plugin instanceof Main){
																		$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																		if($plugin instanceof Main){
																			if($plugin instanceof Main){
																				$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																				if($plugin instanceof Main){
																					if($plugin instanceof Main){
																						$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																						if($plugin instanceof Main){
																							if($plugin instanceof Main){
																								$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																								if($plugin instanceof Main){
																									if($plugin instanceof Main){
																										$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																										if($plugin instanceof Main){
																											if($plugin instanceof Main){
																												$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																												if($plugin instanceof Main){
																													if($plugin instanceof Main){
																														$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																														if($plugin instanceof Main){
																															if($plugin instanceof Main){
																																$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																if($plugin instanceof Main){
																																	if($plugin instanceof Main){
																																		$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																		if($plugin instanceof Main){
																																			if($plugin instanceof Main){
																																				$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																				if($plugin instanceof Main){
																																					if($plugin instanceof Main){
																																						$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																						if($plugin instanceof Main){
																																							if($plugin instanceof Main){
																																								$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																								if($plugin instanceof Main){
																																									if($plugin instanceof Main){
																																										$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																										if($plugin instanceof Main){
																																											if($plugin instanceof Main){
																																												$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																												if($plugin instanceof Main){
																																													if($plugin instanceof Main){
																																														$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																														if($plugin instanceof Main){
																																															if($plugin instanceof Main){
																																																$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																if($plugin instanceof Main){
																																																	if($plugin instanceof Main){
																																																		$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																		if($plugin instanceof Main){
																																																			if($plugin instanceof Main){
																																																				$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																				if($plugin instanceof Main){
																																																					if($plugin instanceof Main){
																																																						$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																						if($plugin instanceof Main){
																																																							if($plugin instanceof Main){
																																																								$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																								if($plugin instanceof Main){
																																																									if($plugin instanceof Main){
																																																										$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																										if($plugin instanceof Main){
																																																											if($plugin instanceof Main){
																																																												$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																												if($plugin instanceof Main){
																																																													if($plugin instanceof Main){
																																																														$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																														if($plugin instanceof Main){
																																																															if($plugin instanceof Main){
																																																																$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																if($plugin instanceof Main){
																																																																	if($plugin instanceof Main){
																																																																		$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																		if($plugin instanceof Main){
																																																																			if($plugin instanceof Main){
																																																																				$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																				if($plugin instanceof Main){
																																																																					if($plugin instanceof Main){
																																																																						$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																						if($plugin instanceof Main){
																																																																							if($plugin instanceof Main){
																																																																								$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																								if($plugin instanceof Main){
																																																																									if($plugin instanceof Main){
																																																																										$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																										if($plugin instanceof Main){
																																																																											if($plugin instanceof Main){
																																																																												$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																												if($plugin instanceof Main){
																																																																													if($plugin instanceof Main){
																																																																														$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																														if($plugin instanceof Main){
																																																																															if($plugin instanceof Main){
																																																																																$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																																if($plugin instanceof Main){
																																																																																	if($plugin instanceof Main){
																																																																																		$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																																		if($plugin instanceof Main){
																																																																																			if($plugin instanceof Main){
																																																																																				$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																																				if($plugin instanceof Main){
																																																																																					if($plugin instanceof Main){
																																																																																						$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																																						if($plugin instanceof Main){
																																																																																							if($plugin instanceof Main){
																																																																																								$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																																								if($plugin instanceof Main){
																																																																																									if($plugin instanceof Main){
																																																																																										$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																																										if($plugin instanceof Main){
																																																																																											if($plugin instanceof Main){
																																																																																												$plugin = $plugin->gotServer()->getPluginManager()->getPlugin("YandereDevStyle");
																																																																																												if($plugin instanceof Main){
																																																																																													var_dump("HEHE BOIIII");
																																																																																													$plugin->gotServer()->getPluginManager()->registerEvents($this, $this);
																																																																																												}
																																																																																											}
																																																																																										}
																																																																																									}
																																																																																								}
																																																																																							}
																																																																																						}
																																																																																					}
																																																																																				}
																																																																																			}
																																																																																		}
																																																																																	}
																																																																																}
																																																																															}
																																																																														}
																																																																													}
																																																																												}
																																																																											}
																																																																										}
																																																																									}
																																																																								}
																																																																							}
																																																																						}
																																																																					}
																																																																				}
																																																																			}
																																																																		}
																																																																	}
																																																																}
																																																															}
																																																														}
																																																													}
																																																												}
																																																											}
																																																										}
																																																									}
																																																								}
																																																							}
																																																						}
																																																					}
																																																				}
																																																			}
																																																		}
																																																	}
																																																}
																																															}
																																														}
																																													}
																																												}
																																											}
																																										}
																																									}
																																								}
																																							}
																																						}
																																					}
																																				}
																																			}
																																		}
																																	}
																																}
																															}
																														}
																													}
																												}
																											}
																										}
																									}
																								}
																							}
																						}
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		if ($command->getName() == "yandere"){
			if (isset($args[0])){
				if ((int)$args[0] === 1){
					$sender->sendMessage((string)$this->number[1]);
				}elseif((int)$args[0] === 2){
					$sender->sendMessage((string)$this->number[2]);
				}elseif((int)$args[0] === 3){
					$sender->sendMessage((string)$this->number[3]);
				}elseif((int)$args[0] === 4){
					$sender->sendMessage((string)$this->number[4]);
				}elseif((int)$args[0] === 5){
					$sender->sendMessage((string)$this->number[5]);
				}elseif((int)$args[0] === 6){
					$sender->sendMessage((string)$this->number[6]);
				}elseif((int)$args[0] === 7){
					$sender->sendMessage((string)$this->number[7]);
				}elseif((int)$args[0] === 8){
					$sender->sendMessage((string)$this->number[8]);
				}elseif((int)$args[0] === 9){
					$sender->sendMessage((string)$this->number[9]);
				}elseif((int)$args[0] === 10){
					$sender->sendMessage((string)$this->number[10]);
				}elseif((int)$args[0] === 11){
					$sender->sendMessage((string)$this->number[11]);
				}elseif((int)$args[0] === 12){
					$sender->sendMessage((string)$this->number[12]);
				}elseif((int)$args[0] === 13){
					$sender->sendMessage((string)$this->number[13]);
				}elseif((int)$args[0] === 14){
					$sender->sendMessage((string)$this->number[14]);
				}elseif((int)$args[0] === 15){
					$sender->sendMessage((string)$this->number[15]);
				}elseif((int)$args[0] === 16){
					$sender->sendMessage((string)$this->number[16]);
				}elseif((int)$args[0] === 17){
					$sender->sendMessage((string)$this->number[17]);
				}elseif((int)$args[0] === 18){
					$sender->sendMessage((string)$this->number[18]);
				}elseif((int)$args[0] === 19){
					$sender->sendMessage((string)$this->number[19]);
				}elseif((int)$args[0] === 20){
					$sender->sendMessage((string)$this->number[20]);
				}elseif((int)$args[0] === 21){
					$sender->sendMessage((string)$this->number[21]);
				}elseif((int)$args[0] === 22){
					$sender->sendMessage((string)$this->number[22]);
				}elseif((int)$args[0] === 23){
					$sender->sendMessage((string)$this->number[23]);
				}elseif((int)$args[0] === 24){
					$sender->sendMessage((string)$this->number[24]);
				}elseif((int)$args[0] === 25){
					$sender->sendMessage((string)$this->number[25]);
				}elseif((int)$args[0] === 26){
					$sender->sendMessage((string)$this->number[26]);
				}elseif((int)$args[0] === 27){
					$sender->sendMessage((string)$this->number[27]);
				}elseif((int)$args[0] === 28){
					$sender->sendMessage((string)$this->number[28]);
				}elseif((int)$args[0] === 29){
					$sender->sendMessage((string)$this->number[29]);
				}elseif((int)$args[0] === 30){
					$sender->sendMessage((string)$this->number[30]);
				}elseif((int)$args[0] === 31){
					$sender->sendMessage((string)$this->number[31]);
				}elseif((int)$args[0] === 32){
					$sender->sendMessage((string)$this->number[32]);
				}elseif((int)$args[0] === 33){
					$sender->sendMessage((string)$this->number[33]);
				}elseif((int)$args[0] === 34){
					$sender->sendMessage((string)$this->number[34]);
				}elseif((int)$args[0] === 35){
					$sender->sendMessage((string)$this->number[35]);
				}elseif((int)$args[0] === 36){
					$sender->sendMessage((string)$this->number[36]);
				}elseif((int)$args[0] === 37){
					$sender->sendMessage((string)$this->number[37]);
				}elseif((int)$args[0] === 38){
					$sender->sendMessage((string)$this->number[38]);
				}elseif((int)$args[0] === 39){
					$sender->sendMessage((string)$this->number[39]);
				}elseif((int)$args[0] === 40){
					$sender->sendMessage((string)$this->number[40]);
				}elseif((int)$args[0] === 41){
					$sender->sendMessage((string)$this->number[41]);
				}elseif((int)$args[0] === 42){
					$sender->sendMessage((string)$this->number[42]);
				}elseif((int)$args[0] === 43){
					$sender->sendMessage((string)$this->number[43]);
				}elseif((int)$args[0] === 44){
					$sender->sendMessage((string)$this->number[44]);
				}elseif((int)$args[0] === 45){
					$sender->sendMessage((string)$this->number[45]);
				}elseif((int)$args[0] === 46){
					$sender->sendMessage((string)$this->number[46]);
				}elseif((int)$args[0] === 47){
					$sender->sendMessage((string)$this->number[47]);
				}elseif((int)$args[0] === 48){
					$sender->sendMessage((string)$this->number[48]);
				}elseif((int)$args[0] === 49){
					$sender->sendMessage((string)$this->number[49]);
				}elseif((int)$args[0] === 50){
					$sender->sendMessage((string)$this->number[50]);
				}elseif((int)$args[0] === 51){
					$sender->sendMessage((string)$this->number[51]);
				}elseif((int)$args[0] === 52){
					$sender->sendMessage((string)$this->number[52]);
				}elseif((int)$args[0] === 53){
					$sender->sendMessage((string)$this->number[53]);
				}elseif((int)$args[0] === 54){
					$sender->sendMessage((string)$this->number[54]);
				}elseif((int)$args[0] === 55){
					$sender->sendMessage((string)$this->number[55]);
				}elseif((int)$args[0] === 56){
					$sender->sendMessage((string)$this->number[56]);
				}elseif((int)$args[0] === 57){
					$sender->sendMessage((string)$this->number[57]);
				}elseif((int)$args[0] === 58){
					$sender->sendMessage((string)$this->number[58]);
				}elseif((int)$args[0] === 59){
					$sender->sendMessage((string)$this->number[59]);
				}elseif((int)$args[0] === 60){
					$sender->sendMessage((string)$this->number[60]);
				}elseif((int)$args[0] === 61){
					$sender->sendMessage((string)$this->number[61]);
				}elseif((int)$args[0] === 62){
					$sender->sendMessage((string)$this->number[62]);
				}elseif((int)$args[0] === 63){
					$sender->sendMessage((string)$this->number[63]);
				}elseif((int)$args[0] === 64){
					$sender->sendMessage((string)$this->number[64]);
				}elseif((int)$args[0] === 65){
					$sender->sendMessage((string)$this->number[65]);
				}elseif((int)$args[0] === 66){
					$sender->sendMessage((string)$this->number[66]);
				}elseif((int)$args[0] === 67){
					$sender->sendMessage((string)$this->number[67]);
				}elseif((int)$args[0] === 68){
					$sender->sendMessage((string)$this->number[68]);
				}elseif((int)$args[0] === 69){
					$sender->sendMessage((string)$this->number[69]);
				}elseif((int)$args[0] === 70){
					$sender->sendMessage((string)$this->number[70]);
				}elseif((int)$args[0] === 71){
					$sender->sendMessage((string)$this->number[71]);
				}elseif((int)$args[0] === 72){
					$sender->sendMessage((string)$this->number[72]);
				}elseif((int)$args[0] === 73){
					$sender->sendMessage((string)$this->number[73]);
				}elseif((int)$args[0] === 74){
					$sender->sendMessage((string)$this->number[74]);
				}elseif((int)$args[0] === 75){
					$sender->sendMessage((string)$this->number[75]);
				}elseif((int)$args[0] === 76){
					$sender->sendMessage((string)$this->number[76]);
				}elseif((int)$args[0] === 77){
					$sender->sendMessage((string)$this->number[77]);
				}elseif((int)$args[0] === 78){
					$sender->sendMessage((string)$this->number[78]);
				}elseif((int)$args[0] === 79){
					$sender->sendMessage((string)$this->number[79]);
				}elseif((int)$args[0] === 80){
					$sender->sendMessage((string)$this->number[80]);
				}elseif((int)$args[0] === 81){
					$sender->sendMessage((string)$this->number[81]);
				}elseif((int)$args[0] === 82){
					$sender->sendMessage((string)$this->number[82]);
				}elseif((int)$args[0] === 83){
					$sender->sendMessage((string)$this->number[83]);
				}elseif((int)$args[0] === 84){
					$sender->sendMessage((string)$this->number[84]);
				}elseif((int)$args[0] === 85){
					$sender->sendMessage((string)$this->number[85]);
				}elseif((int)$args[0] === 86){
					$sender->sendMessage((string)$this->number[86]);
				}elseif((int)$args[0] === 87){
					$sender->sendMessage((string)$this->number[87]);
				}elseif((int)$args[0] === 88){
					$sender->sendMessage((string)$this->number[88]);
				}elseif((int)$args[0] === 89){
					$sender->sendMessage((string)$this->number[89]);
				}elseif((int)$args[0] === 90){
					$sender->sendMessage((string)$this->number[90]);
				}elseif((int)$args[0] === 91){
					$sender->sendMessage((string)$this->number[91]);
				}elseif((int)$args[0] === 92){
					$sender->sendMessage((string)$this->number[92]);
				}elseif((int)$args[0] === 93){
					$sender->sendMessage((string)$this->number[93]);
				}elseif((int)$args[0] === 94){
					$sender->sendMessage((string)$this->number[94]);
				}elseif((int)$args[0] === 95){
					$sender->sendMessage((string)$this->number[95]);
				}elseif((int)$args[0] === 96){
					$sender->sendMessage((string)$this->number[96]);
				}elseif((int)$args[0] === 97){
					$sender->sendMessage((string)$this->number[97]);
				}elseif((int)$args[0] === 98){
					$sender->sendMessage((string)$this->number[98]);
				}elseif((int)$args[0] === 99){
					$sender->sendMessage((string)$this->number[99]);
				}elseif((int)$args[0] === 100){
					$sender->sendMessage((string)$this->number[100]);
				}elseif((int)$args[0] === 101){
					$sender->sendMessage((string)$this->number[101]);
				}elseif((int)$args[0] === 102){
					$sender->sendMessage((string)$this->number[102]);
				}elseif((int)$args[0] === 103){
					$sender->sendMessage((string)$this->number[103]);
				}elseif((int)$args[0] === 104){
					$sender->sendMessage((string)$this->number[104]);
				}elseif((int)$args[0] === 105){
					$sender->sendMessage((string)$this->number[105]);
				}elseif((int)$args[0] === 106){
					$sender->sendMessage((string)$this->number[106]);
				}elseif((int)$args[0] === 107){
					$sender->sendMessage((string)$this->number[107]);
				}elseif((int)$args[0] === 108){
					$sender->sendMessage((string)$this->number[108]);
				}elseif((int)$args[0] === 109){
					$sender->sendMessage((string)$this->number[109]);
				}elseif((int)$args[0] === 110){
					$sender->sendMessage((string)$this->number[110]);
				}elseif((int)$args[0] === 111){
					$sender->sendMessage((string)$this->number[111]);
				}elseif((int)$args[0] === 112){
					$sender->sendMessage((string)$this->number[112]);
				}elseif((int)$args[0] === 113){
					$sender->sendMessage((string)$this->number[113]);
				}elseif((int)$args[0] === 114){
					$sender->sendMessage((string)$this->number[114]);
				}elseif((int)$args[0] === 115){
					$sender->sendMessage((string)$this->number[115]);
				}elseif((int)$args[0] === 116){
					$sender->sendMessage((string)$this->number[116]);
				}elseif((int)$args[0] === 117){
					$sender->sendMessage((string)$this->number[117]);
				}elseif((int)$args[0] === 118){
					$sender->sendMessage((string)$this->number[118]);
				}elseif((int)$args[0] === 119){
					$sender->sendMessage((string)$this->number[119]);
				}elseif((int)$args[0] === 120){
					$sender->sendMessage((string)$this->number[120]);
				}elseif((int)$args[0] === 121){
					$sender->sendMessage((string)$this->number[121]);
				}elseif((int)$args[0] === 122){
					$sender->sendMessage((string)$this->number[122]);
				}elseif((int)$args[0] === 123){
					$sender->sendMessage((string)$this->number[123]);
				}elseif((int)$args[0] === 124){
					$sender->sendMessage((string)$this->number[124]);
				}elseif((int)$args[0] === 125){
					$sender->sendMessage((string)$this->number[125]);
				}elseif((int)$args[0] === 126){
					$sender->sendMessage((string)$this->number[126]);
				}elseif((int)$args[0] === 127){
					$sender->sendMessage((string)$this->number[127]);
				}elseif((int)$args[0] === 128){
					$sender->sendMessage((string)$this->number[128]);
				}elseif((int)$args[0] === 129){
					$sender->sendMessage((string)$this->number[129]);
				}elseif((int)$args[0] === 130){
					$sender->sendMessage((string)$this->number[130]);
				}elseif((int)$args[0] === 131){
					$sender->sendMessage((string)$this->number[131]);
				}elseif((int)$args[0] === 132){
					$sender->sendMessage((string)$this->number[132]);
				}elseif((int)$args[0] === 133){
					$sender->sendMessage((string)$this->number[133]);
				}elseif((int)$args[0] === 134){
					$sender->sendMessage((string)$this->number[134]);
				}elseif((int)$args[0] === 135){
					$sender->sendMessage((string)$this->number[135]);
				}elseif((int)$args[0] === 136){
					$sender->sendMessage((string)$this->number[136]);
				}elseif((int)$args[0] === 137){
					$sender->sendMessage((string)$this->number[137]);
				}elseif((int)$args[0] === 138){
					$sender->sendMessage((string)$this->number[138]);
				}elseif((int)$args[0] === 139){
					$sender->sendMessage((string)$this->number[139]);
				}elseif((int)$args[0] === 140){
					$sender->sendMessage((string)$this->number[140]);
				}elseif((int)$args[0] === 141){
					$sender->sendMessage((string)$this->number[141]);
				}elseif((int)$args[0] === 142){
					$sender->sendMessage((string)$this->number[142]);
				}elseif((int)$args[0] === 143){
					$sender->sendMessage((string)$this->number[143]);
				}elseif((int)$args[0] === 144){
					$sender->sendMessage((string)$this->number[144]);
				}elseif((int)$args[0] === 145){
					$sender->sendMessage((string)$this->number[145]);
				}elseif((int)$args[0] === 146){
					$sender->sendMessage((string)$this->number[146]);
				}elseif((int)$args[0] === 147){
					$sender->sendMessage((string)$this->number[147]);
				}elseif((int)$args[0] === 148){
					$sender->sendMessage((string)$this->number[148]);
				}elseif((int)$args[0] === 149){
					$sender->sendMessage((string)$this->number[149]);
				}elseif((int)$args[0] === 150){
					$sender->sendMessage((string)$this->number[150]);
				}elseif((int)$args[0] === 151){
					$sender->sendMessage((string)$this->number[151]);
				}elseif((int)$args[0] === 152){
					$sender->sendMessage((string)$this->number[152]);
				}elseif((int)$args[0] === 153){
					$sender->sendMessage((string)$this->number[153]);
				}elseif((int)$args[0] === 154){
					$sender->sendMessage((string)$this->number[154]);
				}elseif((int)$args[0] === 155){
					$sender->sendMessage((string)$this->number[155]);
				}elseif((int)$args[0] === 156){
					$sender->sendMessage((string)$this->number[156]);
				}elseif((int)$args[0] === 157){
					$sender->sendMessage((string)$this->number[157]);
				}elseif((int)$args[0] === 158){
					$sender->sendMessage((string)$this->number[158]);
				}elseif((int)$args[0] === 159){
					$sender->sendMessage((string)$this->number[159]);
				}elseif((int)$args[0] === 160){
					$sender->sendMessage((string)$this->number[160]);
				}elseif((int)$args[0] === 161){
					$sender->sendMessage((string)$this->number[161]);
				}elseif((int)$args[0] === 162){
					$sender->sendMessage((string)$this->number[162]);
				}elseif((int)$args[0] === 163){
					$sender->sendMessage((string)$this->number[163]);
				}elseif((int)$args[0] === 164){
					$sender->sendMessage((string)$this->number[164]);
				}elseif((int)$args[0] === 165){
					$sender->sendMessage((string)$this->number[165]);
				}elseif((int)$args[0] === 166){
					$sender->sendMessage((string)$this->number[166]);
				}elseif((int)$args[0] === 167){
					$sender->sendMessage((string)$this->number[167]);
				}elseif((int)$args[0] === 168){
					$sender->sendMessage((string)$this->number[168]);
				}elseif((int)$args[0] === 169){
					$sender->sendMessage((string)$this->number[169]);
				}elseif((int)$args[0] === 170){
					$sender->sendMessage((string)$this->number[170]);
				}elseif((int)$args[0] === 171){
					$sender->sendMessage((string)$this->number[171]);
				}elseif((int)$args[0] === 172){
					$sender->sendMessage((string)$this->number[172]);
				}elseif((int)$args[0] === 173){
					$sender->sendMessage((string)$this->number[173]);
				}elseif((int)$args[0] === 174){
					$sender->sendMessage((string)$this->number[174]);
				}elseif((int)$args[0] === 175){
					$sender->sendMessage((string)$this->number[175]);
				}elseif((int)$args[0] === 176){
					$sender->sendMessage((string)$this->number[176]);
				}elseif((int)$args[0] === 177){
					$sender->sendMessage((string)$this->number[177]);
				}elseif((int)$args[0] === 178){
					$sender->sendMessage((string)$this->number[178]);
				}elseif((int)$args[0] === 179){
					$sender->sendMessage((string)$this->number[179]);
				}elseif((int)$args[0] === 180){
					$sender->sendMessage((string)$this->number[180]);
				}elseif((int)$args[0] === 181){
					$sender->sendMessage((string)$this->number[181]);
				}elseif((int)$args[0] === 182){
					$sender->sendMessage((string)$this->number[182]);
				}elseif((int)$args[0] === 183){
					$sender->sendMessage((string)$this->number[183]);
				}elseif((int)$args[0] === 184){
					$sender->sendMessage((string)$this->number[184]);
				}elseif((int)$args[0] === 185){
					$sender->sendMessage((string)$this->number[185]);
				}elseif((int)$args[0] === 186){
					$sender->sendMessage((string)$this->number[186]);
				}elseif((int)$args[0] === 187){
					$sender->sendMessage((string)$this->number[187]);
				}elseif((int)$args[0] === 188){
					$sender->sendMessage((string)$this->number[188]);
				}elseif((int)$args[0] === 189){
					$sender->sendMessage((string)$this->number[189]);
				}elseif((int)$args[0] === 190){
					$sender->sendMessage((string)$this->number[190]);
				}elseif((int)$args[0] === 191){
					$sender->sendMessage((string)$this->number[191]);
				}elseif((int)$args[0] === 192){
					$sender->sendMessage((string)$this->number[192]);
				}elseif((int)$args[0] === 193){
					$sender->sendMessage((string)$this->number[193]);
				}elseif((int)$args[0] === 194){
					$sender->sendMessage((string)$this->number[194]);
				}elseif((int)$args[0] === 195){
					$sender->sendMessage((string)$this->number[195]);
				}elseif((int)$args[0] === 196){
					$sender->sendMessage((string)$this->number[196]);
				}elseif((int)$args[0] === 197){
					$sender->sendMessage((string)$this->number[197]);
				}elseif((int)$args[0] === 198){
					$sender->sendMessage((string)$this->number[198]);
				}elseif((int)$args[0] === 199){
					$sender->sendMessage((string)$this->number[199]);
				}elseif((int)$args[0] === 200){
					$sender->sendMessage((string)$this->number[200]);
				}elseif((int)$args[0] === 201){
					$sender->sendMessage((string)$this->number[201]);
				}elseif((int)$args[0] === 202){
					$sender->sendMessage((string)$this->number[202]);
				}elseif((int)$args[0] === 203){
					$sender->sendMessage((string)$this->number[203]);
				}elseif((int)$args[0] === 204){
					$sender->sendMessage((string)$this->number[204]);
				}elseif((int)$args[0] === 205){
					$sender->sendMessage((string)$this->number[205]);
				}elseif((int)$args[0] === 206){
					$sender->sendMessage((string)$this->number[206]);
				}elseif((int)$args[0] === 207){
					$sender->sendMessage((string)$this->number[207]);
				}elseif((int)$args[0] === 208){
					$sender->sendMessage((string)$this->number[208]);
				}elseif((int)$args[0] === 209){
					$sender->sendMessage((string)$this->number[209]);
				}elseif((int)$args[0] === 210){
					$sender->sendMessage((string)$this->number[210]);
				}elseif((int)$args[0] === 211){
					$sender->sendMessage((string)$this->number[211]);
				}elseif((int)$args[0] === 212){
					$sender->sendMessage((string)$this->number[212]);
				}elseif((int)$args[0] === 213){
					$sender->sendMessage((string)$this->number[213]);
				}elseif((int)$args[0] === 214){
					$sender->sendMessage((string)$this->number[214]);
				}elseif((int)$args[0] === 215){
					$sender->sendMessage((string)$this->number[215]);
				}elseif((int)$args[0] === 216){
					$sender->sendMessage((string)$this->number[216]);
				}elseif((int)$args[0] === 217){
					$sender->sendMessage((string)$this->number[217]);
				}elseif((int)$args[0] === 218){
					$sender->sendMessage((string)$this->number[218]);
				}elseif((int)$args[0] === 219){
					$sender->sendMessage((string)$this->number[219]);
				}elseif((int)$args[0] === 220){
					$sender->sendMessage((string)$this->number[220]);
				}elseif((int)$args[0] === 221){
					$sender->sendMessage((string)$this->number[221]);
				}elseif((int)$args[0] === 222){
					$sender->sendMessage((string)$this->number[222]);
				}elseif((int)$args[0] === 223){
					$sender->sendMessage((string)$this->number[223]);
				}elseif((int)$args[0] === 224){
					$sender->sendMessage((string)$this->number[224]);
				}elseif((int)$args[0] === 225){
					$sender->sendMessage((string)$this->number[225]);
				}elseif((int)$args[0] === 226){
					$sender->sendMessage((string)$this->number[226]);
				}elseif((int)$args[0] === 227){
					$sender->sendMessage((string)$this->number[227]);
				}elseif((int)$args[0] === 228){
					$sender->sendMessage((string)$this->number[228]);
				}elseif((int)$args[0] === 229){
					$sender->sendMessage((string)$this->number[229]);
				}elseif((int)$args[0] === 230){
					$sender->sendMessage((string)$this->number[230]);
				}elseif((int)$args[0] === 231){
					$sender->sendMessage((string)$this->number[231]);
				}elseif((int)$args[0] === 232){
					$sender->sendMessage((string)$this->number[232]);
				}elseif((int)$args[0] === 233){
					$sender->sendMessage((string)$this->number[233]);
				}elseif((int)$args[0] === 234){
					$sender->sendMessage((string)$this->number[234]);
				}elseif((int)$args[0] === 235){
					$sender->sendMessage((string)$this->number[235]);
				}elseif((int)$args[0] === 236){
					$sender->sendMessage((string)$this->number[236]);
				}elseif((int)$args[0] === 237){
					$sender->sendMessage((string)$this->number[237]);
				}elseif((int)$args[0] === 238){
					$sender->sendMessage((string)$this->number[238]);
				}elseif((int)$args[0] === 239){
					$sender->sendMessage((string)$this->number[239]);
				}elseif((int)$args[0] === 240){
					$sender->sendMessage((string)$this->number[240]);
				}elseif((int)$args[0] === 241){
					$sender->sendMessage((string)$this->number[241]);
				}elseif((int)$args[0] === 242){
					$sender->sendMessage((string)$this->number[242]);
				}elseif((int)$args[0] === 243){
					$sender->sendMessage((string)$this->number[243]);
				}elseif((int)$args[0] === 244){
					$sender->sendMessage((string)$this->number[244]);
				}elseif((int)$args[0] === 245){
					$sender->sendMessage((string)$this->number[245]);
				}elseif((int)$args[0] === 246){
					$sender->sendMessage((string)$this->number[246]);
				}elseif((int)$args[0] === 247){
					$sender->sendMessage((string)$this->number[247]);
				}elseif((int)$args[0] === 248){
					$sender->sendMessage((string)$this->number[248]);
				}elseif((int)$args[0] === 249){
					$sender->sendMessage((string)$this->number[249]);
				}elseif((int)$args[0] === 250){
					$sender->sendMessage((string)$this->number[250]);
				}elseif((int)$args[0] === 251){
					$sender->sendMessage((string)$this->number[251]);
				}elseif((int)$args[0] === 252){
					$sender->sendMessage((string)$this->number[252]);
				}elseif((int)$args[0] === 253){
					$sender->sendMessage((string)$this->number[253]);
				}elseif((int)$args[0] === 254){
					$sender->sendMessage((string)$this->number[254]);
				}elseif((int)$args[0] === 255){
					$sender->sendMessage((string)$this->number[255]);
				}elseif((int)$args[0] === 256){
					$sender->sendMessage((string)$this->number[256]);
				}elseif((int)$args[0] === 257){
					$sender->sendMessage((string)$this->number[257]);
				}elseif((int)$args[0] === 258){
					$sender->sendMessage((string)$this->number[258]);
				}elseif((int)$args[0] === 259){
					$sender->sendMessage((string)$this->number[259]);
				}elseif((int)$args[0] === 260){
					$sender->sendMessage((string)$this->number[260]);
				}elseif((int)$args[0] === 261){
					$sender->sendMessage((string)$this->number[261]);
				}elseif((int)$args[0] === 262){
					$sender->sendMessage((string)$this->number[262]);
				}elseif((int)$args[0] === 263){
					$sender->sendMessage((string)$this->number[263]);
				}elseif((int)$args[0] === 264){
					$sender->sendMessage((string)$this->number[264]);
				}elseif((int)$args[0] === 265){
					$sender->sendMessage((string)$this->number[265]);
				}elseif((int)$args[0] === 266){
					$sender->sendMessage((string)$this->number[266]);
				}elseif((int)$args[0] === 267){
					$sender->sendMessage((string)$this->number[267]);
				}elseif((int)$args[0] === 268){
					$sender->sendMessage((string)$this->number[268]);
				}elseif((int)$args[0] === 269){
					$sender->sendMessage((string)$this->number[269]);
				}elseif((int)$args[0] === 270){
					$sender->sendMessage((string)$this->number[270]);
				}elseif((int)$args[0] === 271){
					$sender->sendMessage((string)$this->number[271]);
				}elseif((int)$args[0] === 272){
					$sender->sendMessage((string)$this->number[272]);
				}elseif((int)$args[0] === 273){
					$sender->sendMessage((string)$this->number[273]);
				}elseif((int)$args[0] === 274){
					$sender->sendMessage((string)$this->number[274]);
				}elseif((int)$args[0] === 275){
					$sender->sendMessage((string)$this->number[275]);
				}elseif((int)$args[0] === 276){
					$sender->sendMessage((string)$this->number[276]);
				}elseif((int)$args[0] === 277){
					$sender->sendMessage((string)$this->number[277]);
				}elseif((int)$args[0] === 278){
					$sender->sendMessage((string)$this->number[278]);
				}elseif((int)$args[0] === 279){
					$sender->sendMessage((string)$this->number[279]);
				}elseif((int)$args[0] === 280){
					$sender->sendMessage((string)$this->number[280]);
				}elseif((int)$args[0] === 281){
					$sender->sendMessage((string)$this->number[281]);
				}elseif((int)$args[0] === 282){
					$sender->sendMessage((string)$this->number[282]);
				}elseif((int)$args[0] === 283){
					$sender->sendMessage((string)$this->number[283]);
				}elseif((int)$args[0] === 284){
					$sender->sendMessage((string)$this->number[284]);
				}elseif((int)$args[0] === 285){
					$sender->sendMessage((string)$this->number[285]);
				}elseif((int)$args[0] === 286){
					$sender->sendMessage((string)$this->number[286]);
				}elseif((int)$args[0] === 287){
					$sender->sendMessage((string)$this->number[287]);
				}elseif((int)$args[0] === 288){
					$sender->sendMessage((string)$this->number[288]);
				}elseif((int)$args[0] === 289){
					$sender->sendMessage((string)$this->number[289]);
				}elseif((int)$args[0] === 290){
					$sender->sendMessage((string)$this->number[290]);
				}elseif((int)$args[0] === 291){
					$sender->sendMessage((string)$this->number[291]);
				}elseif((int)$args[0] === 292){
					$sender->sendMessage((string)$this->number[292]);
				}elseif((int)$args[0] === 293){
					$sender->sendMessage((string)$this->number[293]);
				}elseif((int)$args[0] === 294){
					$sender->sendMessage((string)$this->number[294]);
				}elseif((int)$args[0] === 295){
					$sender->sendMessage((string)$this->number[295]);
				}elseif((int)$args[0] === 296){
					$sender->sendMessage((string)$this->number[296]);
				}elseif((int)$args[0] === 297){
					$sender->sendMessage((string)$this->number[297]);
				}elseif((int)$args[0] === 298){
					$sender->sendMessage((string)$this->number[298]);
				}elseif((int)$args[0] === 299){
					$sender->sendMessage((string)$this->number[299]);
				}elseif((int)$args[0] === 300){
					$sender->sendMessage((string)$this->number[300]);
				}elseif((int)$args[0] === 301){
					$sender->sendMessage((string)$this->number[301]);
				}elseif((int)$args[0] === 302){
					$sender->sendMessage((string)$this->number[302]);
				}elseif((int)$args[0] === 303){
					$sender->sendMessage((string)$this->number[303]);
				}elseif((int)$args[0] === 304){
					$sender->sendMessage((string)$this->number[304]);
				}elseif((int)$args[0] === 305){
					$sender->sendMessage((string)$this->number[305]);
				}elseif((int)$args[0] === 306){
					$sender->sendMessage((string)$this->number[306]);
				}elseif((int)$args[0] === 307){
					$sender->sendMessage((string)$this->number[307]);
				}elseif((int)$args[0] === 308){
					$sender->sendMessage((string)$this->number[308]);
				}elseif((int)$args[0] === 309){
					$sender->sendMessage((string)$this->number[309]);
				}elseif((int)$args[0] === 310){
					$sender->sendMessage((string)$this->number[310]);
				}elseif((int)$args[0] === 311){
					$sender->sendMessage((string)$this->number[311]);
				}elseif((int)$args[0] === 312){
					$sender->sendMessage((string)$this->number[312]);
				}elseif((int)$args[0] === 313){
					$sender->sendMessage((string)$this->number[313]);
				}elseif((int)$args[0] === 314){
					$sender->sendMessage((string)$this->number[314]);
				}elseif((int)$args[0] === 315){
					$sender->sendMessage((string)$this->number[315]);
				}elseif((int)$args[0] === 316){
					$sender->sendMessage((string)$this->number[316]);
				}elseif((int)$args[0] === 317){
					$sender->sendMessage((string)$this->number[317]);
				}elseif((int)$args[0] === 318){
					$sender->sendMessage((string)$this->number[318]);
				}elseif((int)$args[0] === 319){
					$sender->sendMessage((string)$this->number[319]);
				}elseif((int)$args[0] === 320){
					$sender->sendMessage((string)$this->number[320]);
				}elseif((int)$args[0] === 321){
					$sender->sendMessage((string)$this->number[321]);
				}elseif((int)$args[0] === 322){
					$sender->sendMessage((string)$this->number[322]);
				}elseif((int)$args[0] === 323){
					$sender->sendMessage((string)$this->number[323]);
				}elseif((int)$args[0] === 324){
					$sender->sendMessage((string)$this->number[324]);
				}elseif((int)$args[0] === 325){
					$sender->sendMessage((string)$this->number[325]);
				}elseif((int)$args[0] === 326){
					$sender->sendMessage((string)$this->number[326]);
				}elseif((int)$args[0] === 327){
					$sender->sendMessage((string)$this->number[327]);
				}elseif((int)$args[0] === 328){
					$sender->sendMessage((string)$this->number[328]);
				}elseif((int)$args[0] === 329){
					$sender->sendMessage((string)$this->number[329]);
				}elseif((int)$args[0] === 330){
					$sender->sendMessage((string)$this->number[330]);
				}elseif((int)$args[0] === 331){
					$sender->sendMessage((string)$this->number[331]);
				}elseif((int)$args[0] === 332){
					$sender->sendMessage((string)$this->number[332]);
				}elseif((int)$args[0] === 333){
					$sender->sendMessage((string)$this->number[333]);
				}elseif((int)$args[0] === 334){
					$sender->sendMessage((string)$this->number[334]);
				}elseif((int)$args[0] === 335){
					$sender->sendMessage((string)$this->number[335]);
				}elseif((int)$args[0] === 336){
					$sender->sendMessage((string)$this->number[336]);
				}elseif((int)$args[0] === 337){
					$sender->sendMessage((string)$this->number[337]);
				}elseif((int)$args[0] === 338){
					$sender->sendMessage((string)$this->number[338]);
				}elseif((int)$args[0] === 339){
					$sender->sendMessage((string)$this->number[339]);
				}elseif((int)$args[0] === 340){
					$sender->sendMessage((string)$this->number[340]);
				}elseif((int)$args[0] === 341){
					$sender->sendMessage((string)$this->number[341]);
				}elseif((int)$args[0] === 342){
					$sender->sendMessage((string)$this->number[342]);
				}elseif((int)$args[0] === 343){
					$sender->sendMessage((string)$this->number[343]);
				}elseif((int)$args[0] === 344){
					$sender->sendMessage((string)$this->number[344]);
				}elseif((int)$args[0] === 345){
					$sender->sendMessage((string)$this->number[345]);
				}elseif((int)$args[0] === 346){
					$sender->sendMessage((string)$this->number[346]);
				}elseif((int)$args[0] === 347){
					$sender->sendMessage((string)$this->number[347]);
				}elseif((int)$args[0] === 348){
					$sender->sendMessage((string)$this->number[348]);
				}elseif((int)$args[0] === 349){
					$sender->sendMessage((string)$this->number[349]);
				}elseif((int)$args[0] === 350){
					$sender->sendMessage((string)$this->number[350]);
				}elseif((int)$args[0] === 351){
					$sender->sendMessage((string)$this->number[351]);
				}elseif((int)$args[0] === 352){
					$sender->sendMessage((string)$this->number[352]);
				}elseif((int)$args[0] === 353){
					$sender->sendMessage((string)$this->number[353]);
				}elseif((int)$args[0] === 354){
					$sender->sendMessage((string)$this->number[354]);
				}elseif((int)$args[0] === 355){
					$sender->sendMessage((string)$this->number[355]);
				}elseif((int)$args[0] === 356){
					$sender->sendMessage((string)$this->number[356]);
				}elseif((int)$args[0] === 357){
					$sender->sendMessage((string)$this->number[357]);
				}elseif((int)$args[0] === 358){
					$sender->sendMessage((string)$this->number[358]);
				}elseif((int)$args[0] === 359){
					$sender->sendMessage((string)$this->number[359]);
				}elseif((int)$args[0] === 360){
					$sender->sendMessage((string)$this->number[360]);
				}elseif((int)$args[0] === 361){
					$sender->sendMessage((string)$this->number[361]);
				}elseif((int)$args[0] === 362){
					$sender->sendMessage((string)$this->number[362]);
				}elseif((int)$args[0] === 363){
					$sender->sendMessage((string)$this->number[363]);
				}elseif((int)$args[0] === 364){
					$sender->sendMessage((string)$this->number[364]);
				}elseif((int)$args[0] === 365){
					$sender->sendMessage((string)$this->number[365]);
				}elseif((int)$args[0] === 366){
					$sender->sendMessage((string)$this->number[366]);
				}elseif((int)$args[0] === 367){
					$sender->sendMessage((string)$this->number[367]);
				}elseif((int)$args[0] === 368){
					$sender->sendMessage((string)$this->number[368]);
				}elseif((int)$args[0] === 369){
					$sender->sendMessage((string)$this->number[369]);
				}elseif((int)$args[0] === 370){
					$sender->sendMessage((string)$this->number[370]);
				}elseif((int)$args[0] === 371){
					$sender->sendMessage((string)$this->number[371]);
				}elseif((int)$args[0] === 372){
					$sender->sendMessage((string)$this->number[372]);
				}elseif((int)$args[0] === 373){
					$sender->sendMessage((string)$this->number[373]);
				}elseif((int)$args[0] === 374){
					$sender->sendMessage((string)$this->number[374]);
				}elseif((int)$args[0] === 375){
					$sender->sendMessage((string)$this->number[375]);
				}elseif((int)$args[0] === 376){
					$sender->sendMessage((string)$this->number[376]);
				}elseif((int)$args[0] === 377){
					$sender->sendMessage((string)$this->number[377]);
				}elseif((int)$args[0] === 378){
					$sender->sendMessage((string)$this->number[378]);
				}elseif((int)$args[0] === 379){
					$sender->sendMessage((string)$this->number[379]);
				}elseif((int)$args[0] === 380){
					$sender->sendMessage((string)$this->number[380]);
				}elseif((int)$args[0] === 381){
					$sender->sendMessage((string)$this->number[381]);
				}elseif((int)$args[0] === 382){
					$sender->sendMessage((string)$this->number[382]);
				}elseif((int)$args[0] === 383){
					$sender->sendMessage((string)$this->number[383]);
				}elseif((int)$args[0] === 384){
					$sender->sendMessage((string)$this->number[384]);
				}elseif((int)$args[0] === 385){
					$sender->sendMessage((string)$this->number[385]);
				}elseif((int)$args[0] === 386){
					$sender->sendMessage((string)$this->number[386]);
				}elseif((int)$args[0] === 387){
					$sender->sendMessage((string)$this->number[387]);
				}elseif((int)$args[0] === 388){
					$sender->sendMessage((string)$this->number[388]);
				}elseif((int)$args[0] === 389){
					$sender->sendMessage((string)$this->number[389]);
				}elseif((int)$args[0] === 390){
					$sender->sendMessage((string)$this->number[390]);
				}elseif((int)$args[0] === 391){
					$sender->sendMessage((string)$this->number[391]);
				}elseif((int)$args[0] === 392){
					$sender->sendMessage((string)$this->number[392]);
				}elseif((int)$args[0] === 393){
					$sender->sendMessage((string)$this->number[393]);
				}elseif((int)$args[0] === 394){
					$sender->sendMessage((string)$this->number[394]);
				}elseif((int)$args[0] === 395){
					$sender->sendMessage((string)$this->number[395]);
				}elseif((int)$args[0] === 396){
					$sender->sendMessage((string)$this->number[396]);
				}elseif((int)$args[0] === 397){
					$sender->sendMessage((string)$this->number[397]);
				}elseif((int)$args[0] === 398){
					$sender->sendMessage((string)$this->number[398]);
				}elseif((int)$args[0] === 399){
					$sender->sendMessage((string)$this->number[399]);
				}elseif((int)$args[0] === 400){
					$sender->sendMessage((string)$this->number[400]);
				}elseif((int)$args[0] === 401){
					$sender->sendMessage((string)$this->number[401]);
				}elseif((int)$args[0] === 402){
					$sender->sendMessage((string)$this->number[402]);
				}elseif((int)$args[0] === 403){
					$sender->sendMessage((string)$this->number[403]);
				}elseif((int)$args[0] === 404){
					$sender->sendMessage((string)$this->number[404]);
				}elseif((int)$args[0] === 405){
					$sender->sendMessage((string)$this->number[405]);
				}elseif((int)$args[0] === 406){
					$sender->sendMessage((string)$this->number[406]);
				}elseif((int)$args[0] === 407){
					$sender->sendMessage((string)$this->number[407]);
				}elseif((int)$args[0] === 408){
					$sender->sendMessage((string)$this->number[408]);
				}elseif((int)$args[0] === 409){
					$sender->sendMessage((string)$this->number[409]);
				}elseif((int)$args[0] === 410){
					$sender->sendMessage((string)$this->number[410]);
				}elseif((int)$args[0] === 411){
					$sender->sendMessage((string)$this->number[411]);
				}elseif((int)$args[0] === 412){
					$sender->sendMessage((string)$this->number[412]);
				}elseif((int)$args[0] === 413){
					$sender->sendMessage((string)$this->number[413]);
				}elseif((int)$args[0] === 414){
					$sender->sendMessage((string)$this->number[414]);
				}elseif((int)$args[0] === 415){
					$sender->sendMessage((string)$this->number[415]);
				}elseif((int)$args[0] === 416){
					$sender->sendMessage((string)$this->number[416]);
				}elseif((int)$args[0] === 417){
					$sender->sendMessage((string)$this->number[417]);
				}elseif((int)$args[0] === 418){
					$sender->sendMessage((string)$this->number[418]);
				}elseif((int)$args[0] === 419){
					$sender->sendMessage((string)$this->number[419]);
				}elseif((int)$args[0] === 420){
					$sender->sendMessage((string)$this->number[420]);
				}elseif((int)$args[0] === 421){
					$sender->sendMessage((string)$this->number[421]);
				}elseif((int)$args[0] === 422){
					$sender->sendMessage((string)$this->number[422]);
				}elseif((int)$args[0] === 423){
					$sender->sendMessage((string)$this->number[423]);
				}elseif((int)$args[0] === 424){
					$sender->sendMessage((string)$this->number[424]);
				}elseif((int)$args[0] === 425){
					$sender->sendMessage((string)$this->number[425]);
				}elseif((int)$args[0] === 426){
					$sender->sendMessage((string)$this->number[426]);
				}elseif((int)$args[0] === 427){
					$sender->sendMessage((string)$this->number[427]);
				}elseif((int)$args[0] === 428){
					$sender->sendMessage((string)$this->number[428]);
				}elseif((int)$args[0] === 429){
					$sender->sendMessage((string)$this->number[429]);
				}elseif((int)$args[0] === 430){
					$sender->sendMessage((string)$this->number[430]);
				}elseif((int)$args[0] === 431){
					$sender->sendMessage((string)$this->number[431]);
				}elseif((int)$args[0] === 432){
					$sender->sendMessage((string)$this->number[432]);
				}elseif((int)$args[0] === 433){
					$sender->sendMessage((string)$this->number[433]);
				}elseif((int)$args[0] === 434){
					$sender->sendMessage((string)$this->number[434]);
				}elseif((int)$args[0] === 435){
					$sender->sendMessage((string)$this->number[435]);
				}elseif((int)$args[0] === 436){
					$sender->sendMessage((string)$this->number[436]);
				}elseif((int)$args[0] === 437){
					$sender->sendMessage((string)$this->number[437]);
				}elseif((int)$args[0] === 438){
					$sender->sendMessage((string)$this->number[438]);
				}elseif((int)$args[0] === 439){
					$sender->sendMessage((string)$this->number[439]);
				}elseif((int)$args[0] === 440){
					$sender->sendMessage((string)$this->number[440]);
				}elseif((int)$args[0] === 441){
					$sender->sendMessage((string)$this->number[441]);
				}elseif((int)$args[0] === 442){
					$sender->sendMessage((string)$this->number[442]);
				}elseif((int)$args[0] === 443){
					$sender->sendMessage((string)$this->number[443]);
				}elseif((int)$args[0] === 444){
					$sender->sendMessage((string)$this->number[444]);
				}elseif((int)$args[0] === 445){
					$sender->sendMessage((string)$this->number[445]);
				}elseif((int)$args[0] === 446){
					$sender->sendMessage((string)$this->number[446]);
				}elseif((int)$args[0] === 447){
					$sender->sendMessage((string)$this->number[447]);
				}elseif((int)$args[0] === 448){
					$sender->sendMessage((string)$this->number[448]);
				}elseif((int)$args[0] === 449){
					$sender->sendMessage((string)$this->number[449]);
				}elseif((int)$args[0] === 450){
					$sender->sendMessage((string)$this->number[450]);
				}elseif((int)$args[0] === 451){
					$sender->sendMessage((string)$this->number[451]);
				}elseif((int)$args[0] === 452){
					$sender->sendMessage((string)$this->number[452]);
				}elseif((int)$args[0] === 453){
					$sender->sendMessage((string)$this->number[453]);
				}elseif((int)$args[0] === 454){
					$sender->sendMessage((string)$this->number[454]);
				}elseif((int)$args[0] === 455){
					$sender->sendMessage((string)$this->number[455]);
				}elseif((int)$args[0] === 456){
					$sender->sendMessage((string)$this->number[456]);
				}elseif((int)$args[0] === 457){
					$sender->sendMessage((string)$this->number[457]);
				}elseif((int)$args[0] === 458){
					$sender->sendMessage((string)$this->number[458]);
				}elseif((int)$args[0] === 459){
					$sender->sendMessage((string)$this->number[459]);
				}elseif((int)$args[0] === 460){
					$sender->sendMessage((string)$this->number[460]);
				}elseif((int)$args[0] === 461){
					$sender->sendMessage((string)$this->number[461]);
				}elseif((int)$args[0] === 462){
					$sender->sendMessage((string)$this->number[462]);
				}elseif((int)$args[0] === 463){
					$sender->sendMessage((string)$this->number[463]);
				}elseif((int)$args[0] === 464){
					$sender->sendMessage((string)$this->number[464]);
				}elseif((int)$args[0] === 465){
					$sender->sendMessage((string)$this->number[465]);
				}elseif((int)$args[0] === 466){
					$sender->sendMessage((string)$this->number[466]);
				}elseif((int)$args[0] === 467){
					$sender->sendMessage((string)$this->number[467]);
				}elseif((int)$args[0] === 468){
					$sender->sendMessage((string)$this->number[468]);
				}elseif((int)$args[0] === 469){
					$sender->sendMessage((string)$this->number[469]);
				}elseif((int)$args[0] === 470){
					$sender->sendMessage((string)$this->number[470]);
				}elseif((int)$args[0] === 471){
					$sender->sendMessage((string)$this->number[471]);
				}elseif((int)$args[0] === 472){
					$sender->sendMessage((string)$this->number[472]);
				}elseif((int)$args[0] === 473){
					$sender->sendMessage((string)$this->number[473]);
				}elseif((int)$args[0] === 474){
					$sender->sendMessage((string)$this->number[474]);
				}elseif((int)$args[0] === 475){
					$sender->sendMessage((string)$this->number[475]);
				}elseif((int)$args[0] === 476){
					$sender->sendMessage((string)$this->number[476]);
				}elseif((int)$args[0] === 477){
					$sender->sendMessage((string)$this->number[477]);
				}elseif((int)$args[0] === 478){
					$sender->sendMessage((string)$this->number[478]);
				}elseif((int)$args[0] === 479){
					$sender->sendMessage((string)$this->number[479]);
				}elseif((int)$args[0] === 480){
					$sender->sendMessage((string)$this->number[480]);
				}elseif((int)$args[0] === 481){
					$sender->sendMessage((string)$this->number[481]);
				}elseif((int)$args[0] === 482){
					$sender->sendMessage((string)$this->number[482]);
				}elseif((int)$args[0] === 483){
					$sender->sendMessage((string)$this->number[483]);
				}elseif((int)$args[0] === 484){
					$sender->sendMessage((string)$this->number[484]);
				}elseif((int)$args[0] === 485){
					$sender->sendMessage((string)$this->number[485]);
				}elseif((int)$args[0] === 486){
					$sender->sendMessage((string)$this->number[486]);
				}elseif((int)$args[0] === 487){
					$sender->sendMessage((string)$this->number[487]);
				}elseif((int)$args[0] === 488){
					$sender->sendMessage((string)$this->number[488]);
				}elseif((int)$args[0] === 489){
					$sender->sendMessage((string)$this->number[489]);
				}elseif((int)$args[0] === 490){
					$sender->sendMessage((string)$this->number[490]);
				}elseif((int)$args[0] === 491){
					$sender->sendMessage((string)$this->number[491]);
				}elseif((int)$args[0] === 492){
					$sender->sendMessage((string)$this->number[492]);
				}elseif((int)$args[0] === 493){
					$sender->sendMessage((string)$this->number[493]);
				}elseif((int)$args[0] === 494){
					$sender->sendMessage((string)$this->number[494]);
				}elseif((int)$args[0] === 495){
					$sender->sendMessage((string)$this->number[495]);
				}elseif((int)$args[0] === 496){
					$sender->sendMessage((string)$this->number[496]);
				}elseif((int)$args[0] === 497){
					$sender->sendMessage((string)$this->number[497]);
				}elseif((int)$args[0] === 498){
					$sender->sendMessage((string)$this->number[498]);
				}elseif((int)$args[0] === 499){
					$sender->sendMessage((string)$this->number[499]);
				}elseif((int)$args[0] === 500){
					$sender->sendMessage((string)$this->number[500]);
				}elseif((int)$args[0] === 501){
					$sender->sendMessage((string)$this->number[501]);
				}elseif((int)$args[0] === 502){
					$sender->sendMessage((string)$this->number[502]);
				}elseif((int)$args[0] === 503){
					$sender->sendMessage((string)$this->number[503]);
				}elseif((int)$args[0] === 504){
					$sender->sendMessage((string)$this->number[504]);
				}elseif((int)$args[0] === 505){
					$sender->sendMessage((string)$this->number[505]);
				}elseif((int)$args[0] === 506){
					$sender->sendMessage((string)$this->number[506]);
				}elseif((int)$args[0] === 507){
					$sender->sendMessage((string)$this->number[507]);
				}elseif((int)$args[0] === 508){
					$sender->sendMessage((string)$this->number[508]);
				}elseif((int)$args[0] === 509){
					$sender->sendMessage((string)$this->number[509]);
				}elseif((int)$args[0] === 510){
					$sender->sendMessage((string)$this->number[510]);
				}elseif((int)$args[0] === 511){
					$sender->sendMessage((string)$this->number[511]);
				}elseif((int)$args[0] === 512){
					$sender->sendMessage((string)$this->number[512]);
				}elseif((int)$args[0] === 513){
					$sender->sendMessage((string)$this->number[513]);
				}elseif((int)$args[0] === 514){
					$sender->sendMessage((string)$this->number[514]);
				}elseif((int)$args[0] === 515){
					$sender->sendMessage((string)$this->number[515]);
				}elseif((int)$args[0] === 516){
					$sender->sendMessage((string)$this->number[516]);
				}elseif((int)$args[0] === 517){
					$sender->sendMessage((string)$this->number[517]);
				}elseif((int)$args[0] === 518){
					$sender->sendMessage((string)$this->number[518]);
				}elseif((int)$args[0] === 519){
					$sender->sendMessage((string)$this->number[519]);
				}elseif((int)$args[0] === 520){
					$sender->sendMessage((string)$this->number[520]);
				}elseif((int)$args[0] === 521){
					$sender->sendMessage((string)$this->number[521]);
				}elseif((int)$args[0] === 522){
					$sender->sendMessage((string)$this->number[522]);
				}elseif((int)$args[0] === 523){
					$sender->sendMessage((string)$this->number[523]);
				}elseif((int)$args[0] === 524){
					$sender->sendMessage((string)$this->number[524]);
				}elseif((int)$args[0] === 525){
					$sender->sendMessage((string)$this->number[525]);
				}elseif((int)$args[0] === 526){
					$sender->sendMessage((string)$this->number[526]);
				}elseif((int)$args[0] === 527){
					$sender->sendMessage((string)$this->number[527]);
				}elseif((int)$args[0] === 528){
					$sender->sendMessage((string)$this->number[528]);
				}elseif((int)$args[0] === 529){
					$sender->sendMessage((string)$this->number[529]);
				}elseif((int)$args[0] === 530){
					$sender->sendMessage((string)$this->number[530]);
				}elseif((int)$args[0] === 531){
					$sender->sendMessage((string)$this->number[531]);
				}elseif((int)$args[0] === 532){
					$sender->sendMessage((string)$this->number[532]);
				}elseif((int)$args[0] === 533){
					$sender->sendMessage((string)$this->number[533]);
				}elseif((int)$args[0] === 534){
					$sender->sendMessage((string)$this->number[534]);
				}elseif((int)$args[0] === 535){
					$sender->sendMessage((string)$this->number[535]);
				}elseif((int)$args[0] === 536){
					$sender->sendMessage((string)$this->number[536]);
				}elseif((int)$args[0] === 537){
					$sender->sendMessage((string)$this->number[537]);
				}elseif((int)$args[0] === 538){
					$sender->sendMessage((string)$this->number[538]);
				}elseif((int)$args[0] === 539){
					$sender->sendMessage((string)$this->number[539]);
				}elseif((int)$args[0] === 540){
					$sender->sendMessage((string)$this->number[540]);
				}elseif((int)$args[0] === 541){
					$sender->sendMessage((string)$this->number[541]);
				}elseif((int)$args[0] === 542){
					$sender->sendMessage((string)$this->number[542]);
				}elseif((int)$args[0] === 543){
					$sender->sendMessage((string)$this->number[543]);
				}elseif((int)$args[0] === 544){
					$sender->sendMessage((string)$this->number[544]);
				}elseif((int)$args[0] === 545){
					$sender->sendMessage((string)$this->number[545]);
				}elseif((int)$args[0] === 546){
					$sender->sendMessage((string)$this->number[546]);
				}elseif((int)$args[0] === 547){
					$sender->sendMessage((string)$this->number[547]);
				}elseif((int)$args[0] === 548){
					$sender->sendMessage((string)$this->number[548]);
				}elseif((int)$args[0] === 549){
					$sender->sendMessage((string)$this->number[549]);
				}elseif((int)$args[0] === 550){
					$sender->sendMessage((string)$this->number[550]);
				}elseif((int)$args[0] === 551){
					$sender->sendMessage((string)$this->number[551]);
				}elseif((int)$args[0] === 552){
					$sender->sendMessage((string)$this->number[552]);
				}elseif((int)$args[0] === 553){
					$sender->sendMessage((string)$this->number[553]);
				}elseif((int)$args[0] === 554){
					$sender->sendMessage((string)$this->number[554]);
				}elseif((int)$args[0] === 555){
					$sender->sendMessage((string)$this->number[555]);
				}elseif((int)$args[0] === 556){
					$sender->sendMessage((string)$this->number[556]);
				}elseif((int)$args[0] === 557){
					$sender->sendMessage((string)$this->number[557]);
				}elseif((int)$args[0] === 558){
					$sender->sendMessage((string)$this->number[558]);
				}elseif((int)$args[0] === 559){
					$sender->sendMessage((string)$this->number[559]);
				}elseif((int)$args[0] === 560){
					$sender->sendMessage((string)$this->number[560]);
				}elseif((int)$args[0] === 561){
					$sender->sendMessage((string)$this->number[561]);
				}elseif((int)$args[0] === 562){
					$sender->sendMessage((string)$this->number[562]);
				}elseif((int)$args[0] === 563){
					$sender->sendMessage((string)$this->number[563]);
				}elseif((int)$args[0] === 564){
					$sender->sendMessage((string)$this->number[564]);
				}elseif((int)$args[0] === 565){
					$sender->sendMessage((string)$this->number[565]);
				}elseif((int)$args[0] === 566){
					$sender->sendMessage((string)$this->number[566]);
				}elseif((int)$args[0] === 567){
					$sender->sendMessage((string)$this->number[567]);
				}elseif((int)$args[0] === 568){
					$sender->sendMessage((string)$this->number[568]);
				}elseif((int)$args[0] === 569){
					$sender->sendMessage((string)$this->number[569]);
				}elseif((int)$args[0] === 570){
					$sender->sendMessage((string)$this->number[570]);
				}elseif((int)$args[0] === 571){
					$sender->sendMessage((string)$this->number[571]);
				}elseif((int)$args[0] === 572){
					$sender->sendMessage((string)$this->number[572]);
				}elseif((int)$args[0] === 573){
					$sender->sendMessage((string)$this->number[573]);
				}elseif((int)$args[0] === 574){
					$sender->sendMessage((string)$this->number[574]);
				}elseif((int)$args[0] === 575){
					$sender->sendMessage((string)$this->number[575]);
				}elseif((int)$args[0] === 576){
					$sender->sendMessage((string)$this->number[576]);
				}elseif((int)$args[0] === 577){
					$sender->sendMessage((string)$this->number[577]);
				}elseif((int)$args[0] === 578){
					$sender->sendMessage((string)$this->number[578]);
				}elseif((int)$args[0] === 579){
					$sender->sendMessage((string)$this->number[579]);
				}elseif((int)$args[0] === 580){
					$sender->sendMessage((string)$this->number[580]);
				}elseif((int)$args[0] === 581){
					$sender->sendMessage((string)$this->number[581]);
				}elseif((int)$args[0] === 582){
					$sender->sendMessage((string)$this->number[582]);
				}elseif((int)$args[0] === 583){
					$sender->sendMessage((string)$this->number[583]);
				}elseif((int)$args[0] === 584){
					$sender->sendMessage((string)$this->number[584]);
				}elseif((int)$args[0] === 585){
					$sender->sendMessage((string)$this->number[585]);
				}elseif((int)$args[0] === 586){
					$sender->sendMessage((string)$this->number[586]);
				}elseif((int)$args[0] === 587){
					$sender->sendMessage((string)$this->number[587]);
				}elseif((int)$args[0] === 588){
					$sender->sendMessage((string)$this->number[588]);
				}elseif((int)$args[0] === 589){
					$sender->sendMessage((string)$this->number[589]);
				}elseif((int)$args[0] === 590){
					$sender->sendMessage((string)$this->number[590]);
				}elseif((int)$args[0] === 591){
					$sender->sendMessage((string)$this->number[591]);
				}elseif((int)$args[0] === 592){
					$sender->sendMessage((string)$this->number[592]);
				}elseif((int)$args[0] === 593){
					$sender->sendMessage((string)$this->number[593]);
				}elseif((int)$args[0] === 594){
					$sender->sendMessage((string)$this->number[594]);
				}elseif((int)$args[0] === 595){
					$sender->sendMessage((string)$this->number[595]);
				}elseif((int)$args[0] === 596){
					$sender->sendMessage((string)$this->number[596]);
				}elseif((int)$args[0] === 597){
					$sender->sendMessage((string)$this->number[597]);
				}elseif((int)$args[0] === 598){
					$sender->sendMessage((string)$this->number[598]);
				}elseif((int)$args[0] === 599){
					$sender->sendMessage((string)$this->number[599]);
				}elseif((int)$args[0] === 600){
					$sender->sendMessage((string)$this->number[600]);
				}elseif((int)$args[0] === 601){
					$sender->sendMessage((string)$this->number[601]);
				}elseif((int)$args[0] === 602){
					$sender->sendMessage((string)$this->number[602]);
				}elseif((int)$args[0] === 603){
					$sender->sendMessage((string)$this->number[603]);
				}elseif((int)$args[0] === 604){
					$sender->sendMessage((string)$this->number[604]);
				}elseif((int)$args[0] === 605){
					$sender->sendMessage((string)$this->number[605]);
				}elseif((int)$args[0] === 606){
					$sender->sendMessage((string)$this->number[606]);
				}elseif((int)$args[0] === 607){
					$sender->sendMessage((string)$this->number[607]);
				}elseif((int)$args[0] === 608){
					$sender->sendMessage((string)$this->number[608]);
				}elseif((int)$args[0] === 609){
					$sender->sendMessage((string)$this->number[609]);
				}elseif((int)$args[0] === 610){
					$sender->sendMessage((string)$this->number[610]);
				}elseif((int)$args[0] === 611){
					$sender->sendMessage((string)$this->number[611]);
				}elseif((int)$args[0] === 612){
					$sender->sendMessage((string)$this->number[612]);
				}elseif((int)$args[0] === 613){
					$sender->sendMessage((string)$this->number[613]);
				}elseif((int)$args[0] === 614){
					$sender->sendMessage((string)$this->number[614]);
				}elseif((int)$args[0] === 615){
					$sender->sendMessage((string)$this->number[615]);
				}elseif((int)$args[0] === 616){
					$sender->sendMessage((string)$this->number[616]);
				}elseif((int)$args[0] === 617){
					$sender->sendMessage((string)$this->number[617]);
				}elseif((int)$args[0] === 618){
					$sender->sendMessage((string)$this->number[618]);
				}elseif((int)$args[0] === 619){
					$sender->sendMessage((string)$this->number[619]);
				}elseif((int)$args[0] === 620){
					$sender->sendMessage((string)$this->number[620]);
				}elseif((int)$args[0] === 621){
					$sender->sendMessage((string)$this->number[621]);
				}elseif((int)$args[0] === 622){
					$sender->sendMessage((string)$this->number[622]);
				}elseif((int)$args[0] === 623){
					$sender->sendMessage((string)$this->number[623]);
				}elseif((int)$args[0] === 624){
					$sender->sendMessage((string)$this->number[624]);
				}elseif((int)$args[0] === 625){
					$sender->sendMessage((string)$this->number[625]);
				}elseif((int)$args[0] === 626){
					$sender->sendMessage((string)$this->number[626]);
				}elseif((int)$args[0] === 627){
					$sender->sendMessage((string)$this->number[627]);
				}elseif((int)$args[0] === 628){
					$sender->sendMessage((string)$this->number[628]);
				}elseif((int)$args[0] === 629){
					$sender->sendMessage((string)$this->number[629]);
				}elseif((int)$args[0] === 630){
					$sender->sendMessage((string)$this->number[630]);
				}elseif((int)$args[0] === 631){
					$sender->sendMessage((string)$this->number[631]);
				}elseif((int)$args[0] === 632){
					$sender->sendMessage((string)$this->number[632]);
				}elseif((int)$args[0] === 633){
					$sender->sendMessage((string)$this->number[633]);
				}elseif((int)$args[0] === 634){
					$sender->sendMessage((string)$this->number[634]);
				}elseif((int)$args[0] === 635){
					$sender->sendMessage((string)$this->number[635]);
				}elseif((int)$args[0] === 636){
					$sender->sendMessage((string)$this->number[636]);
				}elseif((int)$args[0] === 637){
					$sender->sendMessage((string)$this->number[637]);
				}elseif((int)$args[0] === 638){
					$sender->sendMessage((string)$this->number[638]);
				}elseif((int)$args[0] === 639){
					$sender->sendMessage((string)$this->number[639]);
				}elseif((int)$args[0] === 640){
					$sender->sendMessage((string)$this->number[640]);
				}elseif((int)$args[0] === 641){
					$sender->sendMessage((string)$this->number[641]);
				}elseif((int)$args[0] === 642){
					$sender->sendMessage((string)$this->number[642]);
				}elseif((int)$args[0] === 643){
					$sender->sendMessage((string)$this->number[643]);
				}elseif((int)$args[0] === 644){
					$sender->sendMessage((string)$this->number[644]);
				}elseif((int)$args[0] === 645){
					$sender->sendMessage((string)$this->number[645]);
				}elseif((int)$args[0] === 646){
					$sender->sendMessage((string)$this->number[646]);
				}elseif((int)$args[0] === 647){
					$sender->sendMessage((string)$this->number[647]);
				}elseif((int)$args[0] === 648){
					$sender->sendMessage((string)$this->number[648]);
				}elseif((int)$args[0] === 649){
					$sender->sendMessage((string)$this->number[649]);
				}elseif((int)$args[0] === 650){
					$sender->sendMessage((string)$this->number[650]);
				}elseif((int)$args[0] === 651){
					$sender->sendMessage((string)$this->number[651]);
				}elseif((int)$args[0] === 652){
					$sender->sendMessage((string)$this->number[652]);
				}elseif((int)$args[0] === 653){
					$sender->sendMessage((string)$this->number[653]);
				}elseif((int)$args[0] === 654){
					$sender->sendMessage((string)$this->number[654]);
				}elseif((int)$args[0] === 655){
					$sender->sendMessage((string)$this->number[655]);
				}elseif((int)$args[0] === 656){
					$sender->sendMessage((string)$this->number[656]);
				}elseif((int)$args[0] === 657){
					$sender->sendMessage((string)$this->number[657]);
				}elseif((int)$args[0] === 658){
					$sender->sendMessage((string)$this->number[658]);
				}elseif((int)$args[0] === 659){
					$sender->sendMessage((string)$this->number[659]);
				}elseif((int)$args[0] === 660){
					$sender->sendMessage((string)$this->number[660]);
				}elseif((int)$args[0] === 661){
					$sender->sendMessage((string)$this->number[661]);
				}elseif((int)$args[0] === 662){
					$sender->sendMessage((string)$this->number[662]);
				}elseif((int)$args[0] === 663){
					$sender->sendMessage((string)$this->number[663]);
				}elseif((int)$args[0] === 664){
					$sender->sendMessage((string)$this->number[664]);
				}elseif((int)$args[0] === 665){
					$sender->sendMessage((string)$this->number[665]);
				}elseif((int)$args[0] === 666){
					$sender->sendMessage((string)$this->number[666]);
				}elseif((int)$args[0] === 667){
					$sender->sendMessage((string)$this->number[667]);
				}elseif((int)$args[0] === 668){
					$sender->sendMessage((string)$this->number[668]);
				}elseif((int)$args[0] === 669){
					$sender->sendMessage((string)$this->number[669]);
				}elseif((int)$args[0] === 670){
					$sender->sendMessage((string)$this->number[670]);
				}elseif((int)$args[0] === 671){
					$sender->sendMessage((string)$this->number[671]);
				}elseif((int)$args[0] === 672){
					$sender->sendMessage((string)$this->number[672]);
				}elseif((int)$args[0] === 673){
					$sender->sendMessage((string)$this->number[673]);
				}elseif((int)$args[0] === 674){
					$sender->sendMessage((string)$this->number[674]);
				}elseif((int)$args[0] === 675){
					$sender->sendMessage((string)$this->number[675]);
				}elseif((int)$args[0] === 676){
					$sender->sendMessage((string)$this->number[676]);
				}elseif((int)$args[0] === 677){
					$sender->sendMessage((string)$this->number[677]);
				}elseif((int)$args[0] === 678){
					$sender->sendMessage((string)$this->number[678]);
				}elseif((int)$args[0] === 679){
					$sender->sendMessage((string)$this->number[679]);
				}elseif((int)$args[0] === 680){
					$sender->sendMessage((string)$this->number[680]);
				}elseif((int)$args[0] === 681){
					$sender->sendMessage((string)$this->number[681]);
				}elseif((int)$args[0] === 682){
					$sender->sendMessage((string)$this->number[682]);
				}elseif((int)$args[0] === 683){
					$sender->sendMessage((string)$this->number[683]);
				}elseif((int)$args[0] === 684){
					$sender->sendMessage((string)$this->number[684]);
				}elseif((int)$args[0] === 685){
					$sender->sendMessage((string)$this->number[685]);
				}elseif((int)$args[0] === 686){
					$sender->sendMessage((string)$this->number[686]);
				}elseif((int)$args[0] === 687){
					$sender->sendMessage((string)$this->number[687]);
				}elseif((int)$args[0] === 688){
					$sender->sendMessage((string)$this->number[688]);
				}elseif((int)$args[0] === 689){
					$sender->sendMessage((string)$this->number[689]);
				}elseif((int)$args[0] === 690){
					$sender->sendMessage((string)$this->number[690]);
				}elseif((int)$args[0] === 691){
					$sender->sendMessage((string)$this->number[691]);
				}elseif((int)$args[0] === 692){
					$sender->sendMessage((string)$this->number[692]);
				}elseif((int)$args[0] === 693){
					$sender->sendMessage((string)$this->number[693]);
				}elseif((int)$args[0] === 694){
					$sender->sendMessage((string)$this->number[694]);
				}elseif((int)$args[0] === 695){
					$sender->sendMessage((string)$this->number[695]);
				}elseif((int)$args[0] === 696){
					$sender->sendMessage((string)$this->number[696]);
				}elseif((int)$args[0] === 697){
					$sender->sendMessage((string)$this->number[697]);
				}elseif((int)$args[0] === 698){
					$sender->sendMessage((string)$this->number[698]);
				}elseif((int)$args[0] === 699){
					$sender->sendMessage((string)$this->number[699]);
				}elseif((int)$args[0] === 700){
					$sender->sendMessage((string)$this->number[700]);
				}elseif((int)$args[0] === 701){
					$sender->sendMessage((string)$this->number[701]);
				}elseif((int)$args[0] === 702){
					$sender->sendMessage((string)$this->number[702]);
				}elseif((int)$args[0] === 703){
					$sender->sendMessage((string)$this->number[703]);
				}elseif((int)$args[0] === 704){
					$sender->sendMessage((string)$this->number[704]);
				}elseif((int)$args[0] === 705){
					$sender->sendMessage((string)$this->number[705]);
				}elseif((int)$args[0] === 706){
					$sender->sendMessage((string)$this->number[706]);
				}elseif((int)$args[0] === 707){
					$sender->sendMessage((string)$this->number[707]);
				}elseif((int)$args[0] === 708){
					$sender->sendMessage((string)$this->number[708]);
				}elseif((int)$args[0] === 709){
					$sender->sendMessage((string)$this->number[709]);
				}elseif((int)$args[0] === 710){
					$sender->sendMessage((string)$this->number[710]);
				}elseif((int)$args[0] === 711){
					$sender->sendMessage((string)$this->number[711]);
				}elseif((int)$args[0] === 712){
					$sender->sendMessage((string)$this->number[712]);
				}elseif((int)$args[0] === 713){
					$sender->sendMessage((string)$this->number[713]);
				}elseif((int)$args[0] === 714){
					$sender->sendMessage((string)$this->number[714]);
				}elseif((int)$args[0] === 715){
					$sender->sendMessage((string)$this->number[715]);
				}elseif((int)$args[0] === 716){
					$sender->sendMessage((string)$this->number[716]);
				}elseif((int)$args[0] === 717){
					$sender->sendMessage((string)$this->number[717]);
				}elseif((int)$args[0] === 718){
					$sender->sendMessage((string)$this->number[718]);
				}elseif((int)$args[0] === 719){
					$sender->sendMessage((string)$this->number[719]);
				}elseif((int)$args[0] === 720){
					$sender->sendMessage((string)$this->number[720]);
				}elseif((int)$args[0] === 721){
					$sender->sendMessage((string)$this->number[721]);
				}elseif((int)$args[0] === 722){
					$sender->sendMessage((string)$this->number[722]);
				}elseif((int)$args[0] === 723){
					$sender->sendMessage((string)$this->number[723]);
				}elseif((int)$args[0] === 724){
					$sender->sendMessage((string)$this->number[724]);
				}elseif((int)$args[0] === 725){
					$sender->sendMessage((string)$this->number[725]);
				}elseif((int)$args[0] === 726){
					$sender->sendMessage((string)$this->number[726]);
				}elseif((int)$args[0] === 727){
					$sender->sendMessage((string)$this->number[727]);
				}elseif((int)$args[0] === 728){
					$sender->sendMessage((string)$this->number[728]);
				}elseif((int)$args[0] === 729){
					$sender->sendMessage((string)$this->number[729]);
				}elseif((int)$args[0] === 730){
					$sender->sendMessage((string)$this->number[730]);
				}elseif((int)$args[0] === 731){
					$sender->sendMessage((string)$this->number[731]);
				}elseif((int)$args[0] === 732){
					$sender->sendMessage((string)$this->number[732]);
				}elseif((int)$args[0] === 733){
					$sender->sendMessage((string)$this->number[733]);
				}elseif((int)$args[0] === 734){
					$sender->sendMessage((string)$this->number[734]);
				}elseif((int)$args[0] === 735){
					$sender->sendMessage((string)$this->number[735]);
				}elseif((int)$args[0] === 736){
					$sender->sendMessage((string)$this->number[736]);
				}elseif((int)$args[0] === 737){
					$sender->sendMessage((string)$this->number[737]);
				}elseif((int)$args[0] === 738){
					$sender->sendMessage((string)$this->number[738]);
				}elseif((int)$args[0] === 739){
					$sender->sendMessage((string)$this->number[739]);
				}elseif((int)$args[0] === 740){
					$sender->sendMessage((string)$this->number[740]);
				}elseif((int)$args[0] === 741){
					$sender->sendMessage((string)$this->number[741]);
				}elseif((int)$args[0] === 742){
					$sender->sendMessage((string)$this->number[742]);
				}elseif((int)$args[0] === 743){
					$sender->sendMessage((string)$this->number[743]);
				}elseif((int)$args[0] === 744){
					$sender->sendMessage((string)$this->number[744]);
				}elseif((int)$args[0] === 745){
					$sender->sendMessage((string)$this->number[745]);
				}elseif((int)$args[0] === 746){
					$sender->sendMessage((string)$this->number[746]);
				}elseif((int)$args[0] === 747){
					$sender->sendMessage((string)$this->number[747]);
				}elseif((int)$args[0] === 748){
					$sender->sendMessage((string)$this->number[748]);
				}elseif((int)$args[0] === 749){
					$sender->sendMessage((string)$this->number[749]);
				}elseif((int)$args[0] === 750){
					$sender->sendMessage((string)$this->number[750]);
				}elseif((int)$args[0] === 751){
					$sender->sendMessage((string)$this->number[751]);
				}elseif((int)$args[0] === 752){
					$sender->sendMessage((string)$this->number[752]);
				}elseif((int)$args[0] === 753){
					$sender->sendMessage((string)$this->number[753]);
				}elseif((int)$args[0] === 754){
					$sender->sendMessage((string)$this->number[754]);
				}elseif((int)$args[0] === 755){
					$sender->sendMessage((string)$this->number[755]);
				}elseif((int)$args[0] === 756){
					$sender->sendMessage((string)$this->number[756]);
				}elseif((int)$args[0] === 757){
					$sender->sendMessage((string)$this->number[757]);
				}elseif((int)$args[0] === 758){
					$sender->sendMessage((string)$this->number[758]);
				}elseif((int)$args[0] === 759){
					$sender->sendMessage((string)$this->number[759]);
				}elseif((int)$args[0] === 760){
					$sender->sendMessage((string)$this->number[760]);
				}elseif((int)$args[0] === 761){
					$sender->sendMessage((string)$this->number[761]);
				}elseif((int)$args[0] === 762){
					$sender->sendMessage((string)$this->number[762]);
				}elseif((int)$args[0] === 763){
					$sender->sendMessage((string)$this->number[763]);
				}elseif((int)$args[0] === 764){
					$sender->sendMessage((string)$this->number[764]);
				}elseif((int)$args[0] === 765){
					$sender->sendMessage((string)$this->number[765]);
				}elseif((int)$args[0] === 766){
					$sender->sendMessage((string)$this->number[766]);
				}elseif((int)$args[0] === 767){
					$sender->sendMessage((string)$this->number[767]);
				}elseif((int)$args[0] === 768){
					$sender->sendMessage((string)$this->number[768]);
				}elseif((int)$args[0] === 769){
					$sender->sendMessage((string)$this->number[769]);
				}elseif((int)$args[0] === 770){
					$sender->sendMessage((string)$this->number[770]);
				}elseif((int)$args[0] === 771){
					$sender->sendMessage((string)$this->number[771]);
				}elseif((int)$args[0] === 772){
					$sender->sendMessage((string)$this->number[772]);
				}elseif((int)$args[0] === 773){
					$sender->sendMessage((string)$this->number[773]);
				}elseif((int)$args[0] === 774){
					$sender->sendMessage((string)$this->number[774]);
				}elseif((int)$args[0] === 775){
					$sender->sendMessage((string)$this->number[775]);
				}elseif((int)$args[0] === 776){
					$sender->sendMessage((string)$this->number[776]);
				}elseif((int)$args[0] === 777){
					$sender->sendMessage((string)$this->number[777]);
				}elseif((int)$args[0] === 778){
					$sender->sendMessage((string)$this->number[778]);
				}elseif((int)$args[0] === 779){
					$sender->sendMessage((string)$this->number[779]);
				}elseif((int)$args[0] === 780){
					$sender->sendMessage((string)$this->number[780]);
				}elseif((int)$args[0] === 781){
					$sender->sendMessage((string)$this->number[781]);
				}elseif((int)$args[0] === 782){
					$sender->sendMessage((string)$this->number[782]);
				}elseif((int)$args[0] === 783){
					$sender->sendMessage((string)$this->number[783]);
				}elseif((int)$args[0] === 784){
					$sender->sendMessage((string)$this->number[784]);
				}elseif((int)$args[0] === 785){
					$sender->sendMessage((string)$this->number[785]);
				}elseif((int)$args[0] === 786){
					$sender->sendMessage((string)$this->number[786]);
				}elseif((int)$args[0] === 787){
					$sender->sendMessage((string)$this->number[787]);
				}elseif((int)$args[0] === 788){
					$sender->sendMessage((string)$this->number[788]);
				}elseif((int)$args[0] === 789){
					$sender->sendMessage((string)$this->number[789]);
				}elseif((int)$args[0] === 790){
					$sender->sendMessage((string)$this->number[790]);
				}elseif((int)$args[0] === 791){
					$sender->sendMessage((string)$this->number[791]);
				}elseif((int)$args[0] === 792){
					$sender->sendMessage((string)$this->number[792]);
				}elseif((int)$args[0] === 793){
					$sender->sendMessage((string)$this->number[793]);
				}elseif((int)$args[0] === 794){
					$sender->sendMessage((string)$this->number[794]);
				}elseif((int)$args[0] === 795){
					$sender->sendMessage((string)$this->number[795]);
				}elseif((int)$args[0] === 796){
					$sender->sendMessage((string)$this->number[796]);
				}elseif((int)$args[0] === 797){
					$sender->sendMessage((string)$this->number[797]);
				}elseif((int)$args[0] === 798){
					$sender->sendMessage((string)$this->number[798]);
				}elseif((int)$args[0] === 799){
					$sender->sendMessage((string)$this->number[799]);
				}elseif((int)$args[0] === 800){
					$sender->sendMessage((string)$this->number[800]);
				}elseif((int)$args[0] === 801){
					$sender->sendMessage((string)$this->number[801]);
				}elseif((int)$args[0] === 802){
					$sender->sendMessage((string)$this->number[802]);
				}elseif((int)$args[0] === 803){
					$sender->sendMessage((string)$this->number[803]);
				}elseif((int)$args[0] === 804){
					$sender->sendMessage((string)$this->number[804]);
				}elseif((int)$args[0] === 805){
					$sender->sendMessage((string)$this->number[805]);
				}elseif((int)$args[0] === 806){
					$sender->sendMessage((string)$this->number[806]);
				}elseif((int)$args[0] === 807){
					$sender->sendMessage((string)$this->number[807]);
				}elseif((int)$args[0] === 808){
					$sender->sendMessage((string)$this->number[808]);
				}elseif((int)$args[0] === 809){
					$sender->sendMessage((string)$this->number[809]);
				}elseif((int)$args[0] === 810){
					$sender->sendMessage((string)$this->number[810]);
				}elseif((int)$args[0] === 811){
					$sender->sendMessage((string)$this->number[811]);
				}elseif((int)$args[0] === 812){
					$sender->sendMessage((string)$this->number[812]);
				}elseif((int)$args[0] === 813){
					$sender->sendMessage((string)$this->number[813]);
				}elseif((int)$args[0] === 814){
					$sender->sendMessage((string)$this->number[814]);
				}elseif((int)$args[0] === 815){
					$sender->sendMessage((string)$this->number[815]);
				}elseif((int)$args[0] === 816){
					$sender->sendMessage((string)$this->number[816]);
				}elseif((int)$args[0] === 817){
					$sender->sendMessage((string)$this->number[817]);
				}elseif((int)$args[0] === 818){
					$sender->sendMessage((string)$this->number[818]);
				}elseif((int)$args[0] === 819){
					$sender->sendMessage((string)$this->number[819]);
				}elseif((int)$args[0] === 820){
					$sender->sendMessage((string)$this->number[820]);
				}elseif((int)$args[0] === 821){
					$sender->sendMessage((string)$this->number[821]);
				}elseif((int)$args[0] === 822){
					$sender->sendMessage((string)$this->number[822]);
				}elseif((int)$args[0] === 823){
					$sender->sendMessage((string)$this->number[823]);
				}elseif((int)$args[0] === 824){
					$sender->sendMessage((string)$this->number[824]);
				}elseif((int)$args[0] === 825){
					$sender->sendMessage((string)$this->number[825]);
				}elseif((int)$args[0] === 826){
					$sender->sendMessage((string)$this->number[826]);
				}elseif((int)$args[0] === 827){
					$sender->sendMessage((string)$this->number[827]);
				}elseif((int)$args[0] === 828){
					$sender->sendMessage((string)$this->number[828]);
				}elseif((int)$args[0] === 829){
					$sender->sendMessage((string)$this->number[829]);
				}elseif((int)$args[0] === 830){
					$sender->sendMessage((string)$this->number[830]);
				}elseif((int)$args[0] === 831){
					$sender->sendMessage((string)$this->number[831]);
				}elseif((int)$args[0] === 832){
					$sender->sendMessage((string)$this->number[832]);
				}elseif((int)$args[0] === 833){
					$sender->sendMessage((string)$this->number[833]);
				}elseif((int)$args[0] === 834){
					$sender->sendMessage((string)$this->number[834]);
				}elseif((int)$args[0] === 835){
					$sender->sendMessage((string)$this->number[835]);
				}elseif((int)$args[0] === 836){
					$sender->sendMessage((string)$this->number[836]);
				}elseif((int)$args[0] === 837){
					$sender->sendMessage((string)$this->number[837]);
				}elseif((int)$args[0] === 838){
					$sender->sendMessage((string)$this->number[838]);
				}elseif((int)$args[0] === 839){
					$sender->sendMessage((string)$this->number[839]);
				}elseif((int)$args[0] === 840){
					$sender->sendMessage((string)$this->number[840]);
				}elseif((int)$args[0] === 841){
					$sender->sendMessage((string)$this->number[841]);
				}elseif((int)$args[0] === 842){
					$sender->sendMessage((string)$this->number[842]);
				}elseif((int)$args[0] === 843){
					$sender->sendMessage((string)$this->number[843]);
				}elseif((int)$args[0] === 844){
					$sender->sendMessage((string)$this->number[844]);
				}elseif((int)$args[0] === 845){
					$sender->sendMessage((string)$this->number[845]);
				}elseif((int)$args[0] === 846){
					$sender->sendMessage((string)$this->number[846]);
				}elseif((int)$args[0] === 847){
					$sender->sendMessage((string)$this->number[847]);
				}elseif((int)$args[0] === 848){
					$sender->sendMessage((string)$this->number[848]);
				}elseif((int)$args[0] === 849){
					$sender->sendMessage((string)$this->number[849]);
				}elseif((int)$args[0] === 850){
					$sender->sendMessage((string)$this->number[850]);
				}elseif((int)$args[0] === 851){
					$sender->sendMessage((string)$this->number[851]);
				}elseif((int)$args[0] === 852){
					$sender->sendMessage((string)$this->number[852]);
				}elseif((int)$args[0] === 853){
					$sender->sendMessage((string)$this->number[853]);
				}elseif((int)$args[0] === 854){
					$sender->sendMessage((string)$this->number[854]);
				}elseif((int)$args[0] === 855){
					$sender->sendMessage((string)$this->number[855]);
				}elseif((int)$args[0] === 856){
					$sender->sendMessage((string)$this->number[856]);
				}elseif((int)$args[0] === 857){
					$sender->sendMessage((string)$this->number[857]);
				}elseif((int)$args[0] === 858){
					$sender->sendMessage((string)$this->number[858]);
				}elseif((int)$args[0] === 859){
					$sender->sendMessage((string)$this->number[859]);
				}elseif((int)$args[0] === 860){
					$sender->sendMessage((string)$this->number[860]);
				}elseif((int)$args[0] === 861){
					$sender->sendMessage((string)$this->number[861]);
				}elseif((int)$args[0] === 862){
					$sender->sendMessage((string)$this->number[862]);
				}elseif((int)$args[0] === 863){
					$sender->sendMessage((string)$this->number[863]);
				}elseif((int)$args[0] === 864){
					$sender->sendMessage((string)$this->number[864]);
				}elseif((int)$args[0] === 865){
					$sender->sendMessage((string)$this->number[865]);
				}elseif((int)$args[0] === 866){
					$sender->sendMessage((string)$this->number[866]);
				}elseif((int)$args[0] === 867){
					$sender->sendMessage((string)$this->number[867]);
				}elseif((int)$args[0] === 868){
					$sender->sendMessage((string)$this->number[868]);
				}elseif((int)$args[0] === 869){
					$sender->sendMessage((string)$this->number[869]);
				}elseif((int)$args[0] === 870){
					$sender->sendMessage((string)$this->number[870]);
				}elseif((int)$args[0] === 871){
					$sender->sendMessage((string)$this->number[871]);
				}elseif((int)$args[0] === 872){
					$sender->sendMessage((string)$this->number[872]);
				}elseif((int)$args[0] === 873){
					$sender->sendMessage((string)$this->number[873]);
				}elseif((int)$args[0] === 874){
					$sender->sendMessage((string)$this->number[874]);
				}elseif((int)$args[0] === 875){
					$sender->sendMessage((string)$this->number[875]);
				}elseif((int)$args[0] === 876){
					$sender->sendMessage((string)$this->number[876]);
				}elseif((int)$args[0] === 877){
					$sender->sendMessage((string)$this->number[877]);
				}elseif((int)$args[0] === 878){
					$sender->sendMessage((string)$this->number[878]);
				}elseif((int)$args[0] === 879){
					$sender->sendMessage((string)$this->number[879]);
				}elseif((int)$args[0] === 880){
					$sender->sendMessage((string)$this->number[880]);
				}elseif((int)$args[0] === 881){
					$sender->sendMessage((string)$this->number[881]);
				}elseif((int)$args[0] === 882){
					$sender->sendMessage((string)$this->number[882]);
				}elseif((int)$args[0] === 883){
					$sender->sendMessage((string)$this->number[883]);
				}elseif((int)$args[0] === 884){
					$sender->sendMessage((string)$this->number[884]);
				}elseif((int)$args[0] === 885){
					$sender->sendMessage((string)$this->number[885]);
				}elseif((int)$args[0] === 886){
					$sender->sendMessage((string)$this->number[886]);
				}elseif((int)$args[0] === 887){
					$sender->sendMessage((string)$this->number[887]);
				}elseif((int)$args[0] === 888){
					$sender->sendMessage((string)$this->number[888]);
				}elseif((int)$args[0] === 889){
					$sender->sendMessage((string)$this->number[889]);
				}elseif((int)$args[0] === 890){
					$sender->sendMessage((string)$this->number[890]);
				}elseif((int)$args[0] === 891){
					$sender->sendMessage((string)$this->number[891]);
				}elseif((int)$args[0] === 892){
					$sender->sendMessage((string)$this->number[892]);
				}elseif((int)$args[0] === 893){
					$sender->sendMessage((string)$this->number[893]);
				}elseif((int)$args[0] === 894){
					$sender->sendMessage((string)$this->number[894]);
				}elseif((int)$args[0] === 895){
					$sender->sendMessage((string)$this->number[895]);
				}elseif((int)$args[0] === 896){
					$sender->sendMessage((string)$this->number[896]);
				}elseif((int)$args[0] === 897){
					$sender->sendMessage((string)$this->number[897]);
				}elseif((int)$args[0] === 898){
					$sender->sendMessage((string)$this->number[898]);
				}elseif((int)$args[0] === 899){
					$sender->sendMessage((string)$this->number[899]);
				}elseif((int)$args[0] === 900){
					$sender->sendMessage((string)$this->number[900]);
				}elseif((int)$args[0] === 901){
					$sender->sendMessage((string)$this->number[901]);
				}elseif((int)$args[0] === 902){
					$sender->sendMessage((string)$this->number[902]);
				}elseif((int)$args[0] === 903){
					$sender->sendMessage((string)$this->number[903]);
				}elseif((int)$args[0] === 904){
					$sender->sendMessage((string)$this->number[904]);
				}elseif((int)$args[0] === 905){
					$sender->sendMessage((string)$this->number[905]);
				}elseif((int)$args[0] === 906){
					$sender->sendMessage((string)$this->number[906]);
				}elseif((int)$args[0] === 907){
					$sender->sendMessage((string)$this->number[907]);
				}elseif((int)$args[0] === 908){
					$sender->sendMessage((string)$this->number[908]);
				}elseif((int)$args[0] === 909){
					$sender->sendMessage((string)$this->number[909]);
				}elseif((int)$args[0] === 910){
					$sender->sendMessage((string)$this->number[910]);
				}elseif((int)$args[0] === 911){
					$sender->sendMessage((string)$this->number[911]);
				}elseif((int)$args[0] === 912){
					$sender->sendMessage((string)$this->number[912]);
				}elseif((int)$args[0] === 913){
					$sender->sendMessage((string)$this->number[913]);
				}elseif((int)$args[0] === 914){
					$sender->sendMessage((string)$this->number[914]);
				}elseif((int)$args[0] === 915){
					$sender->sendMessage((string)$this->number[915]);
				}elseif((int)$args[0] === 916){
					$sender->sendMessage((string)$this->number[916]);
				}elseif((int)$args[0] === 917){
					$sender->sendMessage((string)$this->number[917]);
				}elseif((int)$args[0] === 918){
					$sender->sendMessage((string)$this->number[918]);
				}elseif((int)$args[0] === 919){
					$sender->sendMessage((string)$this->number[919]);
				}elseif((int)$args[0] === 920){
					$sender->sendMessage((string)$this->number[920]);
				}elseif((int)$args[0] === 921){
					$sender->sendMessage((string)$this->number[921]);
				}elseif((int)$args[0] === 922){
					$sender->sendMessage((string)$this->number[922]);
				}elseif((int)$args[0] === 923){
					$sender->sendMessage((string)$this->number[923]);
				}elseif((int)$args[0] === 924){
					$sender->sendMessage((string)$this->number[924]);
				}elseif((int)$args[0] === 925){
					$sender->sendMessage((string)$this->number[925]);
				}elseif((int)$args[0] === 926){
					$sender->sendMessage((string)$this->number[926]);
				}elseif((int)$args[0] === 927){
					$sender->sendMessage((string)$this->number[927]);
				}elseif((int)$args[0] === 928){
					$sender->sendMessage((string)$this->number[928]);
				}elseif((int)$args[0] === 929){
					$sender->sendMessage((string)$this->number[929]);
				}elseif((int)$args[0] === 930){
					$sender->sendMessage((string)$this->number[930]);
				}elseif((int)$args[0] === 931){
					$sender->sendMessage((string)$this->number[931]);
				}elseif((int)$args[0] === 932){
					$sender->sendMessage((string)$this->number[932]);
				}elseif((int)$args[0] === 933){
					$sender->sendMessage((string)$this->number[933]);
				}elseif((int)$args[0] === 934){
					$sender->sendMessage((string)$this->number[934]);
				}elseif((int)$args[0] === 935){
					$sender->sendMessage((string)$this->number[935]);
				}elseif((int)$args[0] === 936){
					$sender->sendMessage((string)$this->number[936]);
				}elseif((int)$args[0] === 937){
					$sender->sendMessage((string)$this->number[937]);
				}elseif((int)$args[0] === 938){
					$sender->sendMessage((string)$this->number[938]);
				}elseif((int)$args[0] === 939){
					$sender->sendMessage((string)$this->number[939]);
				}elseif((int)$args[0] === 940){
					$sender->sendMessage((string)$this->number[940]);
				}elseif((int)$args[0] === 941){
					$sender->sendMessage((string)$this->number[941]);
				}elseif((int)$args[0] === 942){
					$sender->sendMessage((string)$this->number[942]);
				}elseif((int)$args[0] === 943){
					$sender->sendMessage((string)$this->number[943]);
				}elseif((int)$args[0] === 944){
					$sender->sendMessage((string)$this->number[944]);
				}elseif((int)$args[0] === 945){
					$sender->sendMessage((string)$this->number[945]);
				}elseif((int)$args[0] === 946){
					$sender->sendMessage((string)$this->number[946]);
				}elseif((int)$args[0] === 947){
					$sender->sendMessage((string)$this->number[947]);
				}elseif((int)$args[0] === 948){
					$sender->sendMessage((string)$this->number[948]);
				}elseif((int)$args[0] === 949){
					$sender->sendMessage((string)$this->number[949]);
				}elseif((int)$args[0] === 950){
					$sender->sendMessage((string)$this->number[950]);
				}elseif((int)$args[0] === 951){
					$sender->sendMessage((string)$this->number[951]);
				}elseif((int)$args[0] === 952){
					$sender->sendMessage((string)$this->number[952]);
				}elseif((int)$args[0] === 953){
					$sender->sendMessage((string)$this->number[953]);
				}elseif((int)$args[0] === 954){
					$sender->sendMessage((string)$this->number[954]);
				}elseif((int)$args[0] === 955){
					$sender->sendMessage((string)$this->number[955]);
				}elseif((int)$args[0] === 956){
					$sender->sendMessage((string)$this->number[956]);
				}elseif((int)$args[0] === 957){
					$sender->sendMessage((string)$this->number[957]);
				}elseif((int)$args[0] === 958){
					$sender->sendMessage((string)$this->number[958]);
				}elseif((int)$args[0] === 959){
					$sender->sendMessage((string)$this->number[959]);
				}elseif((int)$args[0] === 960){
					$sender->sendMessage((string)$this->number[960]);
				}elseif((int)$args[0] === 961){
					$sender->sendMessage((string)$this->number[961]);
				}elseif((int)$args[0] === 962){
					$sender->sendMessage((string)$this->number[962]);
				}elseif((int)$args[0] === 963){
					$sender->sendMessage((string)$this->number[963]);
				}elseif((int)$args[0] === 964){
					$sender->sendMessage((string)$this->number[964]);
				}elseif((int)$args[0] === 965){
					$sender->sendMessage((string)$this->number[965]);
				}elseif((int)$args[0] === 966){
					$sender->sendMessage((string)$this->number[966]);
				}elseif((int)$args[0] === 967){
					$sender->sendMessage((string)$this->number[967]);
				}elseif((int)$args[0] === 968){
					$sender->sendMessage((string)$this->number[968]);
				}elseif((int)$args[0] === 969){
					$sender->sendMessage((string)$this->number[969]);
				}elseif((int)$args[0] === 970){
					$sender->sendMessage((string)$this->number[970]);
				}elseif((int)$args[0] === 971){
					$sender->sendMessage((string)$this->number[971]);
				}elseif((int)$args[0] === 972){
					$sender->sendMessage((string)$this->number[972]);
				}elseif((int)$args[0] === 973){
					$sender->sendMessage((string)$this->number[973]);
				}elseif((int)$args[0] === 974){
					$sender->sendMessage((string)$this->number[974]);
				}elseif((int)$args[0] === 975){
					$sender->sendMessage((string)$this->number[975]);
				}elseif((int)$args[0] === 976){
					$sender->sendMessage((string)$this->number[976]);
				}elseif((int)$args[0] === 977){
					$sender->sendMessage((string)$this->number[977]);
				}elseif((int)$args[0] === 978){
					$sender->sendMessage((string)$this->number[978]);
				}elseif((int)$args[0] === 979){
					$sender->sendMessage((string)$this->number[979]);
				}elseif((int)$args[0] === 980){
					$sender->sendMessage((string)$this->number[980]);
				}elseif((int)$args[0] === 981){
					$sender->sendMessage((string)$this->number[981]);
				}elseif((int)$args[0] === 982){
					$sender->sendMessage((string)$this->number[982]);
				}elseif((int)$args[0] === 983){
					$sender->sendMessage((string)$this->number[983]);
				}elseif((int)$args[0] === 984){
					$sender->sendMessage((string)$this->number[984]);
				}elseif((int)$args[0] === 985){
					$sender->sendMessage((string)$this->number[985]);
				}elseif((int)$args[0] === 986){
					$sender->sendMessage((string)$this->number[986]);
				}elseif((int)$args[0] === 987){
					$sender->sendMessage((string)$this->number[987]);
				}elseif((int)$args[0] === 988){
					$sender->sendMessage((string)$this->number[988]);
				}elseif((int)$args[0] === 989){
					$sender->sendMessage((string)$this->number[989]);
				}elseif((int)$args[0] === 990){
					$sender->sendMessage((string)$this->number[990]);
				}elseif((int)$args[0] === 991){
					$sender->sendMessage((string)$this->number[991]);
				}elseif((int)$args[0] === 992){
					$sender->sendMessage((string)$this->number[992]);
				}elseif((int)$args[0] === 993){
					$sender->sendMessage((string)$this->number[993]);
				}elseif((int)$args[0] === 994){
					$sender->sendMessage((string)$this->number[994]);
				}elseif((int)$args[0] === 995){
					$sender->sendMessage((string)$this->number[995]);
				}elseif((int)$args[0] === 996){
					$sender->sendMessage((string)$this->number[996]);
				}elseif((int)$args[0] === 997){
					$sender->sendMessage((string)$this->number[997]);
				}elseif((int)$args[0] === 998){
					$sender->sendMessage((string)$this->number[998]);
				}elseif((int)$args[0] === 999){
					$sender->sendMessage((string)$this->number[999]);
				}elseif((int)$args[0] === 1000){
					$sender->sendMessage((string)$this->number[1000]);
				}
			}
		}
		return true;
	}
}